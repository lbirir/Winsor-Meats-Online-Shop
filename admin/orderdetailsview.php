<?php 
	  require('../config.php');
	  require("header.php");
	  ?>
<?php
   	if(!isset($_SESSION['WINSOR_ADMIN_LOGGED_IN']))
	{ exit( include('login.php'));}
	else
  	?>
    <?php if (isset($_SESSION['WINSOR_ADMIN_LOGGED_IN']))
	{
	?>
	
     <!-- B. MAIN -->
    <div class="main">
  
      <!-- B.1 MAIN CONTENT -->
      <div class="main-content">
       <h1 class="pagetitle"><img src="./img/categories.gif"/>Order Details</h1>
       
	  
	   
       <div class="column1-unit">
          <table>
            <tr>
                <th class="top" scope="col">Order Date</th>
                <th class="top" id="name">Product Name</th>
                <th class="top" id="name" scope="col">Price</th>
                <th class="top" scope="col">Quantity</th>
                <th class="top" scope="col">Total</th>
            </tr>
            <?php
		$query="select * from orderitems where OrderID=".$_GET['orderid']."";
		$sql=mysql_query($query) or die(mysql_error());
		while($row=mysql_fetch_assoc($sql))
		{
			
			$quantity=(int)$row['OrderItemQty'];
			$price=(int)$row['OrderItemPrice'];

			$total=$price*$quantity;
		?>
            
            <tr class"highlight">
            	<td><?php echo $row['OrderDate']?></td>
            	<td><?php echo $row['ProductName']?></td>
                <td><?php echo $row['OrderItemPrice']?></td>
                <td><?php echo $row['OrderItemQty']?></td>
                
                <td><?php echo $total?></td>
                </tr>
            <? }?>
            
            
				</table>
                 <p class="caption"><strong>Table 4.1.1</strong> Order Details</p>
                 <h2><a href="OrdersView.php" title="Go back to Orders"><img src="img/arrow2.gif"/> Back to Orders</a> </h2> 
        </div>
       
      </div>
    </div>
      
    <?php } ?> 
<?php require("footer.php");?>