<?php 
	require('config.php');
	require('header.php');
	$page_id='Registration';

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
   	<div class="center_title_bar">Registration</div>
    
    
    
    <div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
            <div class="product_title_big">Registration Successful</div>
                  
              <div class="specifications">
                <p>You have been successfully registered!Login</p>
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