<?php 
	require('config.php');
	require('header.php');
	$page_id='Shopping cart';
	
	
?>           
    <div class="crumb_navigation">

    Navigation: <span class="current"> <?php echo($page_id); ?></span>
   
    </div>        
    
    <!--left content-->  
  <?php 
	include("left_content.php");
	?>
   <!-- end of left content -->
   
  
   <div class="center_content">
   	<div class="center_title_bar"> Your Shopping Cart     </div>
    <?php 
	if (empty($_SESSION['WINSOR_LOGGED_IN'])) {
	      $customer_id=0;
      }else $customer_id=$_SESSION['WINSOR_LOGGED_IN'];
   ?>
   
    
  
	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
                     <div class="details_big_box">
                         
                         <div class="specifications">
                         <div class="product_title_big"><img src="images/cart.gif"> Shopping Cart Items</div>
                         <table>
            <tr><th class="top" scope="col" colspan="2">Product Name & Image</th><th class="top" scope="col" colspan="3" id='add'>Quantity</th><th class="top" scope="col">Price(Ksh)</th><th class="top" scope="col" colspan="1" id="action">Action</th></tr>
            <?
    $res = mysql_query ( 'SELECT * FROM shoppingcart WHERE CustID= '.$customer_id.'');
	$cart_num_products = mysql_num_rows($res);
	$i = 0;
	$total_products=0;
	$total_price=0.00;
	while($i < $cart_num_products) {
	
	$Prod_id 	 = mysql_result($res,$i,"ProductID");
	$Prod_number 	 = mysql_result($res,$i,"CartQty");
	
				$res2 = mysql_query ( 'SELECT * FROM products WHERE ProductID= '.$Prod_id.'');
				$cart_products = mysql_num_rows($res2);
				$j = 0;
				while($j < $cart_products) {
	
				$Prod_Name 	 = mysql_result($res2,$j,"ProdName");
				$Prod_Price 	 = mysql_result($res2,$j,"ProdPrice");
				$Prod_Photo	 = mysql_result($res2,$j,"ProdPhoto");
				if ($Prod_Photo=="") $Prod_Photo="nothumb.jpg";
				
				print "<tr><th scope='row'>".$Prod_Name."</th><td><img id='img2' src='uploaded/".$Prod_Photo."'/></td><td>".$Prod_number."</td><td ><a href='add_item.php?prodid=".$Prod_id."&custid=".$customer_id."' title='Add Quantity' ><img  src='images/quantity_up.gif' /></a></td><td><a href='remove_item.php?prodid=".$Prod_id."&custid=".$customer_id."' title='Subtract Quantity' ><img  src='images/quantity_down.gif' /></a></td><td>".$Prod_Price."</td><td><a href='delete_item.php?prodid=".$Prod_id."&custid=".$customer_id."' title='Delete item' ><img  src='images/delete.gif' /></a></td></tr>";
				
				$total_products = $total_products + $Prod_number;
				
				$j++;
				}
	
	$total_price = $total_price + ($Prod_number * $Prod_Price);
	
	$i++;
	}
	
	
	
    ?>
            
            <tr><th class="top" scope="col" colspan="2"></th><th class="top" scope="col" colspan="3">Total Items</th><th class="top" scope="col">Total Price(Ksh)</th><th class="top" scope="col" colspan="1">Empty Cart</th></tr>
            <tr><th scope="row"></th><td></td><td colspan="3"><? echo($total_products) ?></td><td><? echo($total_price) ?>.00</td><td colspan=""><a href="empty_cart.php?custid=<? echo($customer_id)?>" title="Empty Cart" ><img src="images/delete.gif" /></a></td></tr>
          </table>
                       </div>
                       <a href="products.php" class="continue" title="Continue shopping"><< Continue Shopping</a><a href="check_out.php" class="checkout" title="Check out">Check out >></a>
                     </div>                        
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
	require("footer.php");
?>