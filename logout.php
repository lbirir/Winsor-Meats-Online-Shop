<?php
include ('config.php');
unset($_SESSION['WINSOR_LOGGED_IN'],
			$_SESSION['WINSOR_LOGGED_EMAIL'],
			$_SESSION['WINSOR_LOGGED_NAME'],
			$_SESSION['WINSOR_LOGGED_OTHERNAME'],
			$_SESSION['WINSOR_LOGGED_ACCOUNT'],
			$_SESSION['WINSOR_LOGGED_IN_USERNAME']);
session_destroy();
			
header("location: index.php");
exit;

?>