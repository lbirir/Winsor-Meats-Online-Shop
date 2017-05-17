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
	   
	    
       $recipe_id=$_GET['id']; 
       if ($error > 0) {
	   $recipe_id=$_GET['id'];
	   exit(include('edit_recipe.php'));
	  } else  
	  {
	  $query="UPDATE recipes SET Recipe_name = '".$_POST['name']. "', Cat_ID= '".$_POST['category']. "', Ingredients= '".$_POST['ingredients']. "', Recipe_desc= '".$_POST['description']. "', Instructions= '".$_POST['instructions']. "' WHERE Recipe_id = ".$_GET['id']."";
	  $sql = mysql_query($query) or die(mysql_error());
	  
	  if(!empty ($_FILES['uploadedfile']['name'])){
	  
	  $file = $_FILES['uploadedfile']['name'];
         $ext = explode(".", $file);
         $ext = strtolower(array_pop($ext));
		 
		 $query="UPDATE recipes SET Image = '".$recipe_id.".".$ext."' WHERE Recipe_id = ".$recipe_id."";
		 $sql = mysql_query($query) or die(mysql_error());

         if ($ext == "jpg" || $ext == "gif" || $ext == "png") {         
            $target_path = "../recipeimg/";
            $target_path = $target_path.$recipe_id ;
            
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
	  include("RecipesView.php");
	   
		} 
?>