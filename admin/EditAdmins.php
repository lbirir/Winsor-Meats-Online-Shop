<?php
	include('../config.php');
	$error = 0;
         // read post values if needed
      if (empty($_POST['firstname']))  
	   $error=1;
	   if (empty($_POST['surname']))
	   $error=2;
	   if (empty($_POST['email']))
	   $error=3;
	   if (empty($_POST['password']))
	   $error=4;
	    
       if ($error > 0) {
	   $admin_id=$_GET['id'];
	   exit(include('edit_admins.php'));
	  } else 
	  {
		  $password=$_POST['password'];
		  $pass=md5($password);
	  $query="UPDATE administrators SET FirstName = '".$_POST['firstname']."', Surname = '".$_POST['surname']."', Email = '".$_POST['email']."', Password = '$pass' WHERE AdminId = ".$_GET['id']."";
	  $sql = mysql_query($query) or die(mysql_error());
	  $edited=1;
	  include("AdminsView.php");
	   
		} 
?>