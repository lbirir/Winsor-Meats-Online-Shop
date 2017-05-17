<?php
	  require('config.php');
     if (empty($_SESSION['WINSOR_LOGGED_IN'])) {
	      $cust_id=0;
      }else $cust_id=$_SESSION['WINSOR_LOGGED_IN'];
	  
	  $prod_id=$_GET['id'];
	  $current_date=date("Y/m/d");
	  	$total=$_GET['amount'];
	  	
		
		  $query = "INSERT INTO orders ( CustID , OrderDate ,  Status , TotalAmount) VALUES ( '" . $cust_id . "', '" . $current_date . "', 'Pending', '" . $total . "')";
			$sql = mysql_query($query) or die(mysql_error());
			
			
			
			
			
			$sqlq="select max(OrderID) from orders where CustID=$cust_id";
			$result=mysql_query($sqlq) or die(mysql_error()." ".$sqlq);
			if($row=mysql_fetch_assoc($result))
			$orderid=$row["max(OrderID)"];
			
            $query4="INSERT INTO bills ( OrderID, TotalAmount) 
						VALUES ('$orderid', " .$total.")";
	  		$sql4 = mysql_query($query4) or die(mysql_error());

			
			$sqlos="select * from shoppingcart where CustID=$cust_id";
			$resultos=mysql_query($sqlos) or die(mysql_error()." ".$sqlos);
			
			$j=0;
			$pidnums=mysql_num_rows($resultos);
			while($j<$pidnums)
			{
				$productid=mysql_result($resultos,$j,"ProductID");
				$quantity=mysql_result($resultos,$j,"CartQty");
				
				$sqlr="select ProdPrice from products where ProductID=$productid";
			    $resultr=mysql_query($sqlr) or die(mysql_error());
			    if($row2=mysql_fetch_assoc($resultr))
			    $prodprice=$row2["ProdPrice"];
				
				$sqlt="select ProdName from products where ProductID=$productid";
			    $resultt=mysql_query($sqlt) or die(mysql_error());
			    if($row3=mysql_fetch_assoc($resultt))
			    $prodname=$row3["ProdName"];
			
			$query2 = "INSERT INTO orderitems ( OrderID, ProductID , OrderItemQty, OrderDate, OrderItemPrice, ProductName) VALUES (  '$orderid', '$productid', '$quantity', '" . $current_date . "', '$prodprice', '$prodname')";
			$sql2 = mysql_query($query2) or die(mysql_error());
			
			
			
			$j++;
			}
			
			
			$query3 ="DELETE FROM shoppingcart WHERE CustID= ".$cust_id."";
		$sql3 = mysql_query($query3) or die(mysql_error());
			
			
		
	  include("order_confirm.php");
?>