<?php
     include('../config.php');
	 
	 
	 $query="UPDATE customers SET CustStatus = 'activated' WHERE CustId = ".$_GET['id']."";
	  $sql = mysql_query($query) or die(mysql_error());
	  include("CustomerView.php");
?>
	   
	   