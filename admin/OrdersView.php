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
       <h1 class="pagetitle"><img src="./img/categories.gif"/>Orders</h1>
       <?php  if($deleted>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Order Deleted</h3>');
	   }
	   $deleted = 0;
	   ?>
       
       <h1><? echo($num_row);?> Shop orders made</h1> 
       <div class="column1-unit">
          <table>
            <tr>
                <th class="top" id="id">Order ID</th>
                <th class="top" id="name" scope="col">Order Date</th>
                <th class="top" id="name" scope="col">Customer Name</th>
                <th class="top" scope="col">Status</th>
                <th class="top" scope="col">Amount</th>
                <th class="top" id="action" colspan="4">Actions</th>
            </tr>
       <?php 
	   $sql="SELECT * FROM orders ORDER BY OrderID";
	   $result = mysql_query($sql) or die(mysql_error());
	   while ($row=mysql_fetch_assoc($result))
	   {
			$sql2="select CustOtherNames,CustSurname from customers where CustID=".$row['CustID']."";
			$result2=mysql_query($sql2) or die(mysql_error());
			$row2=mysql_fetch_assoc($result2);
			$fname=$row2['CustOtherNames'];
			$lname=$row2['CustSurname'];
			$orderid=$row['OrderID'];
			$orderstatus=$row['Status'];
	   ?>
       <tr class"highlight">
            	<td class="id"><?php echo $row['OrderID'] ?></td>
            	<td><?php echo $row['OrderDate']?></td>
                <td><?php echo $fname." ".$lname?></td>
                <td><?php echo $row['Status']?></td>
                <td><?php echo $row['TotalAmount']?></td>
                
                <td class="action"><a href="orderdetailsview.php?orderid=<?php echo $row['OrderID'] ?>" title="View Order"><img src="img/details.gif"/></a> </td>
                
                <td class = "action"><a href="delete_order.php?id=<?php echo ($row[0]);?>" title="Delete Order"><img src="img/delete.gif"/></a> </td>
                <td class = "action"> <input type="checkbox" name="select" id="checkbox" size="1" value="" /></td>
            </tr>
            <? }?>
          </table>
       
     
       
       
            
			
					
            
          <p class="caption"><strong>Table 4.1.</strong> Orders</p>
        </div>
       
      </div>
    </div>
      
    <?php } ?> 
<?php require("footer.php");?>

