<?php
	include('../config.php');
	$error = 0;
         // read post values if needed
       if (empty($_POST['name']))  
	   $error=1;
	   if (empty($_POST['description']))
	   $error=2;
	    
       if ($error > 0) {
	   $cat_id=$_GET['id'];
	   exit(include('edit_category.php'));
	  } else 
	  {
	  $query="UPDATE category SET CatName = '".$_POST['name']. "', CatDescription = '".$_POST['description']."' WHERE CatId = ".$_GET['id']."";
	  $sql = mysql_query($query) or die(mysql_error());
	  $edited=1;
	  include("CategoryView.php");
	   
		} 
?>