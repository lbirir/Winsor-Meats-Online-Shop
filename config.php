<?php
session_start();

//if(isset($_SESSION['WINSOR_LOGGED_IN_USERNAME'])) 
	//$_SESSION['WINSOR_LOGGED_IN_USERNAME'] = addslashes($_SESSION['WINSOR_LOGGED_IN_USERNAME']);




if(!mysql_connect("localhost","root","")) die('DB connection failed');
if(!mysql_select_db('winsor'))  die('DB selection failed');

?>
