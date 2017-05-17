<?php
     include('config.php');
	 $mpesacode=$_POST['mpesacode'];
	 
	        $validatempesa=mysql_query("Select * from mpesapayment where MpesaCode = '$mpesacode'") or die (mysql_error());
		 if(mysql_num_rows($validatempesa)==1){
	 
	        $query="Select * from mpesapayment where MpesaCode = '$mpesacode' ";
	        $sql = mysql_query($query) or die(mysql_error());
			if($row = mysql_fetch_array($sql)){
				$mpesa_amount= $row['Value'];
			}
			$query="SELECT * FROM customers";
			$sql = mysql_query($query) or die(mysql_error());
			if($row = mysql_fetch_array($sql)){
				$customer_id= $row['CustID'];
			}
			$query="SELECT * FROM orders WHERE CustID=".$customer_id." AND Status='Pending'";
			$sql = mysql_query($query) or die(mysql_error());
			if($row = mysql_fetch_array($sql)){
				$order_id= $row['OrderID'];
			}
			$query="SELECT * FROM bills WHERE OrderID=".$order_id."";
			$sql = mysql_query($query) or die(mysql_error());
			if($row = mysql_fetch_array($sql)){
				$bill_id= $row['Bill_ID'];
				$order_id= $row['OrderID'];
				$amount_paid= $row['AmountPaid'];
				$total_amount= $row['TotalAmount'];
			}
			
			$new_pay=$amount_paid+$mpesa_amount;
			$balance=$total_amount-$new_pay;
			
			
			$Uquery="UPDATE bills  SET	AmountPaid = ".$new_pay.",
										Balance = ".$balance."
										WHERE OrderID=".$order_id."";
	  		$Usql = mysql_query($Uquery) or die(mysql_error());
			
			
			if($balance<1){
				$Uquery="UPDATE orders  SET	Status = 'Paid'
										WHERE OrderID=".$order_id."";
	  		$Usql = mysql_query($Uquery) or die(mysql_error());	
			}
			
			$query="INSERT INTO payment ( MpesaCode, Bill_ID, Payment_Value) 
		 VALUES ('" .$mpesacode . "', '" .$bill_id. "','".$new_pay."')";
	  $sql = mysql_query($query) or die(mysql_error()); 
	  
	  $query3 ="DELETE FROM mpesapayment WHERE MpesaCode= '$mpesacode'";
		$sql3 = mysql_query($query3) or die(mysql_error());
	  
		  
	  
	  include('header.php');
		include('left_content.php');
		
		 print
		'<div class="center_content">
         <div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big"> 
			<div class="product_title_big">  Receipt</div>
		 <p> Ksh for MPESA CODE: '.$mpesacode.' has serviced order of order no. '.$order_id.'<br/><br/>					
                          <span class="error">Ksh '.$new_pay.'</span>has been paid.<br/>
                             ';?>
                             <?php
							 if ($balance>1)
							 {
							?>
                          Balance is  <span class="error">Ksh <?php echo $balance; ?></span><br/>
                          Complete payment within one week for product to be delivered.<br/>
                          <br/>
                          <?php
							 }
                            else
							{
							?>
                           Payment for order no. <?php echo $order_id; ?> has been completed.<br/>
                            <?php
							}
							?>
							
                            <?php print '<span class="blue"><a href="order_history.php" title="Order History"> <img src="images/order.gif">     My Order History</a></span><br />
                          <span class="blue"><a href="index.php" title="Home"> <img src="images/home.png">     Home Page</a></span><br /> </div>
		 <div class="bottom_prod_box_big"></div> </div> </div> ';

		include('right_content.php');
		include('footer.php');	
		
		 }
		 else 
		 include('header.php');
		include('left_content.php');
		
		 print
		'<div class="center_content">
		<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big"> 
         <div class="product_title_big">MPESA CODE ERROR!</div>
		<p> The MPESA code is wrong, does no exist or has already been used.</p>   
		<span class="blue"><a href="order_history.php" title="Order History"> <img src="images/order.gif">     My Order History</a></span><br />
                          <span class="blue"><a href="index.php" title="Home"> <img src="images/home.png">     Home Page</a></span><br /> </div>
		<div class="bottom_prod_box_big"></div> </div> </div> ';
		include('right_content.php');
		include('footer.php');
		
		?>