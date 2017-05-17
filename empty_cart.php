<?php 
	require('config.php');
	
	$customer_id=$_GET['custid'];
	
		$query ="DELETE FROM shoppingcart WHERE CustID= ".$customer_id."";
		$sql = mysql_query($query) or die(mysql_error());
		
	  include("view_cart.php");
	
	

?>