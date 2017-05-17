<?php 
include('../config.php');
$error = 0;
         // read post values if needed
       if (empty($_POST['email']))  
	   $error=1;
	   if (empty($_POST['password']))
	   $error=1;
$email=$_POST['email'];
$password=$_POST['password'];
$pass=md5($password);

$query=("SELECT * FROM administrators WHERE Email='$email' AND Password='$pass'");
$res = mysql_query($query);

if(mysql_num_rows($res)>0)
		{
			$_SESSION['WINSOR_ADMIN_LOGGED_IN'] = mysql_result($res,0,"AdminID");
			$_SESSION['WINSOR_ADMIN_LOGGED_EMAIL'] = mysql_result($res,0,"Email");
			$_SESSION['WINSOR_ADMIN_LOGGED_SURNAME'] = mysql_result($res,0,"SurName");
			$_SESSION['WINSOR_ADMIN_LOGGED_FIRSTNAME'] = mysql_result($res,0,"FirstName");
			$_SESSION['WINSOR_ADMIN_LOGGED_ACCOUNT'] = mysql_result($res,0,"SurName");
			//$_SESSION['WINSOR_ADMIN_LOGGED_IN_USERNAME'] = $_POST['username'];
	$error = 0;		
	header("location: index.php");
	
	}else $error = 1;
	
	if ($error > 0 ) {
		include('header.php');
	  exit( include('login.php'));
	}
	exit;
?>