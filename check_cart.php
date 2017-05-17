<?php
include('config.php');
if (empty($_SESSION['WINSOR_LOGGED_IN'])) {
	      $customer_id=0;
      }else $customer_id=$_SESSION['WINSOR_LOGGED_IN'];
	  
$res = mysql_query ( 'SELECT * FROM shoppingcart WHERE CustID= '.$customer_id.'');
	$all = mysql_num_rows($res);
	$j = 0;
	$number=0;
	$cart_price=0;
				while($j < $all) {
				$pid	 = mysql_result($res,$j,"ProductID");
				$qty	 = mysql_result($res,$j,"CartQty");
				
				$number = $number + $qty;
				
				
				
				$res2 = mysql_query ( 'SELECT ProdPrice FROM products WHERE ProductID= '.$pid.'');
				$cart_products = mysql_num_rows($res2);
				$k = 0;
				while($k < $cart_products) {
	
					$prodprice	 = mysql_result($res2,$k,"ProdPrice");
					$cart_price = $cart_price + ($prodprice * $qty);
				
				
				
				$k++;
				}
				
				
				$j++;
				}
?>