<?php 
	require('config.php');
	
	
	
	
	if (empty($_SESSION['WINSOR_LOGGED_IN'])) {
	      exit(include('login_page.php'));
      }else {
	  
	  
	  	require('header.php');
		$page_id='Order History';
	  
	  $cust_id=$_SESSION['WINSOR_LOGGED_IN'];
	  $login_name = $_SESSION['WINSOR_LOGGED_OTHERNAME']." ".$_SESSION['WINSOR_LOGGED_NAME'];
?>           
    <div class="crumb_navigation">

    Navigation: <span class="current"> <?php echo($page_id.' > '.$login_name); ?></span>
   
    </div>        
    
    <!--left content-->  
  <?php 
	include("left_content.php");
	?>
   <!-- end of left content -->
   
   
   
   <div class="center_content">
   	<div class="center_title_bar">Check Out  <img src="images/return.gif"></div>
    
	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
                     <div class="details_big_box">
                         
                       <div class="specifications">
                         <div class="product_title_big"><img src="images/order.gif"> Order List</div>
                         <table>
            <tr><th class="top" scope="col" colspan="1">Order Date</th><th class="top" scope="col" colspan="1" id='add'>Status</th><th class="top" scope="col">Order Amount(Ksh)</th><th id="action" class="top" scope="col" colspan="2">Actions</th></tr>
            <?
			$customer_id=$_SESSION['WINSOR_LOGGED_IN'];
    $res = mysql_query ( 'SELECT * FROM orders WHERE CustID= '.$customer_id.'');
	$cart_num_orders = mysql_num_rows($res);
	
	$i = 0;
	
	while($i < $cart_num_orders) {
	$order_id 	 = mysql_result($res,$i,"OrderID");
	$order_date 	 = mysql_result($res,$i,"OrderDate");
	$order_status 	 = mysql_result($res,$i,"Status");
	$order_amount 	 = mysql_result($res,$i,"TotalAmount");
	
				
				
				print "<tr><th scope='row'>".$order_date."</th><td>".$order_status."</td><td colspan='1'>".$order_amount."</td>
				
				
				<td class='action' colspan='1'><a href='order_details.php?orderid=".$order_id."&width=650&heigt=350' title='View Order Details' class='thickbox'> <img src='images/details.gif'></a></td>
				
				<td class='action' colspan='1'><a href='mpesapayment.php?orderamount=".$order_amount."&width=650&heigt=350' title='Make Payment' class='thickbox'> <img src='images/cash.png'></a></td> 
				</tr>";
				
				
	
	$i++;
	}
	
	
	
    ?>
            
            
          </table>
                 </div> 
                 </div> 
                <span class="blue"><a href="index.php" title="Home"> <img src="images/home.png">     Home Page</a></span><br />                      
            </div>
            <div class="bottom_prod_box_big"></div>                                
        </div>
	
    </div>
    <!-- end of center content -->
    <!-- right_contenet-->
<?php 
	include("right_content.php");
	?>
   <!-- end of right content -->   
   
            
   </div><!-- end of main content -->
   
<?php 
	require("footer.php"); }
?>