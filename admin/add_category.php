<?php
	include('../config.php');
	$error = 0;
         // read post values if needed
       if (empty($_POST['name']))  
	   $error=1;
	   if (empty($_POST['description']))
	   $error=2;
	    
       if ($error > 0) {
	   exit(include('AddCategory.php'));
	  } else 
	  {
	  $query="INSERT INTO category ( CatName, CatDescription) VALUES ('" .$_POST['name'] . "', '" .$_POST['description']."')";
	  $sql = mysql_query($query) or die(mysql_error());
	  $success=1;
	  include("CategoryView.php");
	   
		} 
?>