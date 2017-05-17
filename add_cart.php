<?php
	  require('config.php');
     if (empty($_SESSION['WINSOR_LOGGED_IN'])) {
	      $cust_id=0;
      }else $cust_id=$_SESSION['WINSOR_LOGGED_IN'];
	  
	  $prod_id=$_GET['id'];
	  $current_date=date("Y/m/d");
	  	
	  	$query ="SELECT CartQty FROM shoppingcart WHERE CustID=".$cust_id." AND ProductID = ".$prod_id."";
		$sql = mysql_query($query) or die(mysql_error());
		
		if(!$row = mysql_fetch_row($sql)){
		
		  $query = "INSERT INTO shoppingcart ( CustID , ProductID ,  Status , CartDate, CartQty) VALUES ( '" . $cust_id . "', '" . $prod_id . "', 'active', '" . $current_date . "', '1')";
			$sql = mysql_query($query) or die(mysql_error());
			
		}else{
		
				
		
					$Qty = $row[0];
					
					$Qty = $Qty + 1;
	  		//echo($Qty);
					//exit();
				
			$query="UPDATE shoppingcart SET CartQty = ".$Qty." WHERE CustID=".$cust_id." AND ProductID = ".$prod_id."";
	  		$sql = mysql_query($query) or die(mysql_error());
		}
	  include("view_cart.php");
?>