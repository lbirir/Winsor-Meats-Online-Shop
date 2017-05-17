<?php
	include('config.php');
	$error = 0;
         // read post values if needed
       if (empty($_POST['firstname']))  
	   $error=1;
	   if (empty($_POST['surname']))
	   $error=2;
	   if (empty($_POST['address']))
	   $error=3;
	   if (empty($_POST['town']))
	   $error=4;
	   if (empty($_POST['phone']))
	   $error=5;
	   if (empty($_POST['email']))
	   $error=6;
	   if (empty($_POST['password']))
	   $error=7;
	   if (empty($_POST['type']))
	   $error=8;
	   if (empty($_POST['gender']))
	   $error=9;
	   
	    
       if ($error > 0) {
	     
	   exit(include('my_info.php'));
	  } else 
	  {
		  $password=$_POST['password'];
		  $pass=md5($password);
	  $query="UPDATE customers SET CustSurname = '".$_POST['surname']. "', CustOtherNames= '".$_POST['firstname']. "', CustStreetAddress= '".$_POST['address']. "', CustTown = '".$_POST['town']. "', CustType= '".$_POST['type']. "', CustMobileNo= '".$_POST['phone']. "', CustGender= '".$_POST['gender']. "', CustEmail= '".$_POST['email']. "', CustPassword= '$pass' WHERE CustId = ".$_SESSION['WINSOR_LOGGED_IN']."";
	  $sql = mysql_query($query) or die(mysql_error());
	  
	   
	  $success=1;
	  include("my_account.php");
	   
		} 
?>