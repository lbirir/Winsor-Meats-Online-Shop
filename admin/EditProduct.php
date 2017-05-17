<?php
	include('../config.php');
	$error = 0;
         // read post values if needed
       if (empty($_POST['name']))  
	   $error=1;
	   if (empty($_POST['category']))
	   $error=2;
	   if (empty($_POST['price']))
	   $error=2;
	   if (empty($_POST['description']))
	   $error=2;
	   
	   $product_id=$_GET['id']; 
       if ($error > 0) {
	   $product_id=$_GET['id'];
	   exit(include('edit_product.php'));
	  } else 
	  {
	  $query="UPDATE products SET ProdName = '".$_POST['name']. "', CatID= '".$_POST['category']. "', ProdPrice= '".$_POST['price']. "', ProdDescription= '".$_POST['description']. "', ProdSize= '".$_POST['size']. "', ProdQty= '".$_POST['qty']. "', ProdAvailable= '".$_POST['status']. "' WHERE ProductId = ".$_GET['id']."";
	  $sql = mysql_query($query) or die(mysql_error());
	  
	  if(!empty ($_FILES['uploadedfile']['name'])){
	  
	  $file = $_FILES['uploadedfile']['name'];
         $ext = explode(".", $file);
         $ext = strtolower(array_pop($ext));
		 
		 $query="UPDATE products SET ProdPhoto = '".$product_id.".".$ext."' WHERE ProductID = ".$product_id."";
		 $sql = mysql_query($query) or die(mysql_error());

         if ($ext == "jpg" || $ext == "gif" || $ext == "png") {         
            $target_path = "../uploaded/";
            $target_path = $target_path.$product_id ;
            
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
	  
	  $edited=1;
	  include("ProductView.php");
	   
		} 
?>