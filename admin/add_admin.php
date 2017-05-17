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
	   exit(include('AddAdmin.php'));
	  } else 
	  {
		  $password=$_POST['password'];
		  $pass=md5($password);
	  $query="INSERT INTO administrators ( FirstName, SurName, Email, Password) VALUES ('" .$_POST['firstname'] . "', '" .$_POST['surname']."', '" .$_POST['email'] . "','$pass')";
	  $sql = mysql_query($query) or die(mysql_error());
	  $success=1;
	  
	  include("AdminsView.php");
	   
		} 
?>