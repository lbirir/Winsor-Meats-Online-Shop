<?php 
	require('config.php');
	require('header.php');
	$page_id='My Account';
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
   	<div class="center_title_bar">My Account : <? echo($login_name); ?>  <img src="images/profiles.png"></div>
    
	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
                     <div class="details_big_box">
                         
                         <div class="specifications">
                         <div class="product_title_big"><?php echo($login_name);?></div>
                         <br />
                         <span class="blue"><a href="order_history.php" title="Order History"> <img src="images/order.gif">     My Order History</a></span><br />
                          <span class="blue"><a href="view_cart.php" title="Shopping Cart"> <img src="images/cart.gif">     View Shopping Cart</a></span><br />
                          <span class="blue"><a href="my_info.php" title="Personal Information"> <img src="images/update.gif">     Personal Information</a></span><? if ($success==1){echo("* Information edited *");$success=0;} ?><br />
                          <a href="logout.php" class="checkout" title="Log out">Log out >></a>
                          
                       </div>
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