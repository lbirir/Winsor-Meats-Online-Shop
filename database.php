<?php
$connection = mysql_connect("localhost", "root");
if(!$connection){
	die("Database Connection failed:".mysql_error());
	}
	
$db_select = mysql_select_db("winsor",$connection);
if(!db_select){
	die("Database selection failed:".mysql_error());
	}

//mysql_close($connection);
 ?>
