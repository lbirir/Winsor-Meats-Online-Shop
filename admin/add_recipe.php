<?php
	include('../config.php');
	$error = 0;
         // read post values if needed
       if (empty($_POST['name']))  
	   $error=1;
	   if (empty($_POST['category']))
	   $error=2;
	   if (empty($_POST['description']))
	   $error=3;
	   
	    
       if ($error > 0) {
	   exit(include('AddRecipe.php'));
	  } else 
	  {
	  $query="INSERT INTO recipes ( Recipe_name, Cat_ID, Ingredients, Recipe_desc, Instructions, Add_date) VALUES ('" .$_POST['name'] . "', '" .$_POST['category'] . "','" .$_POST['ingredients'] . "', '" .$_POST['description'] . "','" .$_POST['instructions'] . "','".date("Y-m-d",strtotime(SERVER_TIME_ADJUSTMENT))."')";
	  $sql = mysql_query($query) or die(mysql_error());
	  
	   $query="SELECT Recipe_id FROM recipes WHERE Recipe_name = '".$_POST['name'] ."'";
	   $sql = mysql_query($query) or die(mysql_error());
	   if ($row = mysql_fetch_row($sql)) $recipe_id = $row[0];
	   
	   if(!empty ($_FILES['uploadedfile']['name'])){
	   
	  	$file = $_FILES['uploadedfile']['name'];
         $ext = explode(".", $file);
         $ext = strtolower(array_pop($ext));
		 
		 $query="UPDATE recipes SET Image = '".$recipe_id.".".$ext."' WHERE Recipe_id = ".$recipe_id."";
		 $sql = mysql_query($query) or die(mysql_error());

         if ($ext == "jpg" || $ext == "gif" || $ext == "png") {         
            $target_path = "../recipeimg/";
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
	  include("RecipesView.php");
	   
		} 
?>