<?php
include ('../config.php');
unset($_SESSION['WINSOR_ADMIN_LOGGED_IN'],
			$_SESSION['WINSOR_ADMIN_LOGGED_EMAIL'],
			$_SESSION['WINSOR_ADMIN_LOGGED_SURNAME'],
			$_SESSION['WINSOR_ADMIN_LOGGED_FIRSTNAME'],
			$_SESSION['WINSOR__ADMIN_LOGGED_ACCOUNT'],
			$_SESSION['WINSOR_ADMIN_LOGGED_IN_USERNAME']);
session_destroy();	
header("location: index.php");
exit;

?>