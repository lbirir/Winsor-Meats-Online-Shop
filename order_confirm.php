<?php 
	require('config.php');
	require('header.php');
	$page_id='Order Confirmation';

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
   	<div class="center_title_bar">Orders</div>
    
    
    
    <div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
            <div class="product_title_big"><img src="images/checked.png"> Order Complete</div>
                  
              <div class="specifications">
                <p>Thank You for shopping at Winsor Meats. Your Order is being processed</p>
                <br />
                         <span class="blue"><a href="order_history.php" title="Order History"> <img src="images/order.gif">     My Order History</a></span><br />
                          <span class="blue"><a href="index.php" title="Home"> <img src="images/home.png">     Home Page</a></span><br />
                <p>&nbsp;</p>
              </div>                        
            </div>
            <div class="bottom_prod_box_big"></div>                                
        </div>

   
    </div><!-- end of center content -->
   
   <!-- right_contenet-->
   <?php 
	include("right_content.php");
	?>
   <!-- end of right content -->   
   
            
   </div><!-- end of main content -->
   
<?php 
	require("footer.php");
?>