<?php 
	require('config.php');
	
	$prod_id=$_GET['prodid'];
	$customer_id=$_GET['custid'];
	
		$query ="SELECT CartQty FROM shoppingcart WHERE CustID= ".$customer_id." AND ProductID = ".$prod_id."";
		$sql = mysql_query($query) or die(mysql_error());
		
		if($row = mysql_fetch_row($sql)){
		
		  
					$Qty = $row[0];
					
					$Qty = $Qty + 1;
	  		//echo($Qty);
					//exit();
				
			$query1="UPDATE shoppingcart SET CartQty = ".$Qty." WHERE CustID= ".$customer_id." AND ProductID = ".$prod_id."";
	  		$sql1 = mysql_query($query1) or die(mysql_error());
		}
	  include("view_cart.php");
	
	

?>