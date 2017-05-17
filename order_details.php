<?php 
	require('config.php');
	
	?>
   <div class="center_content">
   	<div class="center_title_bar"> Order Details     </div>
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
                         <div class="product_title_big"><img src="images/cart.gif"> Order Items</div>
                         <table>
            <tr><th class="top" scope="col" colspan="2">Product Name & Image</th><th class="top" scope="col" colspan="3" id='add'>Quantity</th><th class="top" scope="col">Price(Ksh)</th></tr>
            <?
    $res = mysql_query ( 'SELECT * FROM orderitems WHERE OrderID= '.$_GET['orderid'].'');
	$cart_num_products = mysql_num_rows($res);
	$i = 0;
	$total_products=0;
	$total_price=0.00;
	while($i < $cart_num_products) {
	
	$Prod_id 	 = mysql_result($res,$i,"ProductID");
	$Prod_number 	 = mysql_result($res,$i,"OrderItemQty");
	
				$res2 = mysql_query ( 'SELECT * FROM products WHERE ProductID= '.$Prod_id.'');
				$cart_products = mysql_num_rows($res2);
				$j = 0;
				while($j < $cart_products) {
	
				$Prod_Name 	 = mysql_result($res2,$j,"ProdName");
				$Prod_Price 	 = mysql_result($res2,$j,"ProdPrice");
				$Prod_Photo	 = mysql_result($res2,$j,"ProdPhoto");
				if ($Prod_Photo=="") $Prod_Photo="nothumb.jpg";
				
				print "<tr><th scope='row'>".$Prod_Name."</th><td><img id='img2' src='uploaded/".$Prod_Photo."'/></td><td colspan='3'>".$Prod_number."</td><td>".$Prod_Price."</td></tr>";
				
				$total_products = $total_products + $Prod_number;
				
				$j++;
				}
	
	$total_price = $total_price + ($Prod_number * $Prod_Price);
	
	$i++;
	}
	
	
	
    ?>
            
            <tr><th class="top" scope="col" colspan="2"></th><th class="top" scope="col" colspan="3">Total Items</th><th class="top" scope="col">Total Price(Ksh)</th></tr>
            <tr><th scope="row" colspan="2"></th><td colspan="3"><? echo($total_products) ?></td><td><? echo($total_price) ?>.00</td></tr>
          </table>
                       </div>
                       
                     </div>                        
            </div>
            <div class="bottom_prod_box_big"></div>                                
        </div>

    </div>
    <!-- end of center content -->
    <!-- right_contenet-->