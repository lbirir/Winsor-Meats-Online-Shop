<?php
	include('../config.php');
	$error = 0;
         // read post values if needed
       if (empty($_POST['name']))  
	   $error=1;
	   if (empty($_POST['category']))
	   $error=2;
	   if (empty($_POST['price']))
	   $error=3;
	   if (empty($_POST['description']))
	   $error=4;
	   if (empty($_POST['size']))
	   $error=5;
	   if (empty($_POST['qty']))
	   $error=6;
	   
	    
       if ($error > 0) {
	   exit(include('AddProduct.php'));
	  } else 
	  {
	  $query="INSERT INTO products ( ProdName, CatID, ProdPrice, ProdDescription, ProdSize, ProdQty, ProdAvailable) VALUES ('" .$_POST['name'] . "', '" .$_POST['category'] . "','" .$_POST['price'] . "', '" .$_POST['description'] . "','" .$_POST['size'] . "','" .$_POST['qty'] . "','" .$_POST['status'] . "')";
	  $sql = mysql_query($query) or die(mysql_error());
	  
	   $query="SELECT ProductID FROM products WHERE ProdName = '".$_POST['name'] ."'";
	   $sql = mysql_query($query) or die(mysql_error());
	   if ($row = mysql_fetch_row($sql)) $prod_id = $row[0];
	   
	   if(!empty ($_FILES['uploadedfile']['name'])){
	   
	  	$file = $_FILES['uploadedfile']['name'];
         $ext = explode(".", $file);
         $ext = strtolower(array_pop($ext));
		 
		 $query="UPDATE products SET ProdPhoto = '".$prod_id.".".$ext."' WHERE ProductID = ".$prod_id."";
		 $sql = mysql_query($query) or die(mysql_error());

         if ($ext == "jpg" || $ext == "gif" || $ext == "png") {         
            $target_path = "../uploaded/";
            $target_path = $target_path.$prod_id ;
            
             // delete old gif or jpg if it is found
             if (file_exists($target_path.".jpg")) { unlink($target_path.".jpg"); }
             if (file_exists($target_path.".gif")) { unlink($target_path.".gif"); }
             if (file_exists($target_path.".png")) { unlink($target_path.".png"); }
            
             $target_path = $target_path.".".$ext; 

             if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
	            chmod($target_path,0644); 
				}
	  }
	  }
	  
	  $success=1;
	  include("ProductView.php");
	   
		} 
?>