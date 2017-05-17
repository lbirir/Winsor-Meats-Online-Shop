<?php 
	require('config.php');
	
	$prod_id=$_GET['prodid'];
	$customer_id=$_GET['custid'];
	
		$query ="DELETE FROM shoppingcart WHERE CustID= ".$customer_id." AND ProductID = ".$prod_id."";
		$sql = mysql_query($query) or die(mysql_error());
		
	  include("view_cart.php");
	
	

?>