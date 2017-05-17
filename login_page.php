<?php 
	require('config.php');

	  	require('header.php');
		$page_id='Checkout';
	  
	  $cust_id=$_SESSION['WINSOR_LOGGED_IN'];
	  $login_name = $_SESSION['WINSOR_LOGGED_OTHERNAME']." ".$_SESSION['WINSOR_LOGGED_NAME'];
?>           
    <div class="crumb_navigation">

    Navigation: <span class="current"> <?php echo($page_id.' > Login '); ?></span>
   
    </div>        
    
    <!--left content-->  
  <?php 
	include("left_content.php");
	?>
   <!-- end of left content -->
   
   
   
   <div class="center_content">
   	<div class="center_title_bar">Check Out : <img src="images/return.gif"></div>
    
	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
                     <div class="details_big_box">
                         
                         <div class="specifications">
                         <div class="product_title_big">Login first to check out!</div>
                        
                         <?
						 
                         if ($login_error==1) { print '
   
   <div class="border_box">
 <div class="loginform">
            <form method="post" action="login.php?action=1"> 
              <p><input type="hidden" name="rememberme" value="0" /></p>
              <fieldset>
			  	<p id="error">Login Error: User not found!</p>
                <p><label for="username_2" class="top">Email Address:</label><br />
                  <input type="text" name="username" id="username" tabindex="1" class="field" value="" /></p>
    	        <p><label for="password" class="top">Password:</label><br />
                  <input type="password" name="password" id="password" tabindex="2" class="field" value="" /></p>
    	        
    	        <p><input type="submit" name="cmdweblogin" class="button" value="LOGIN"  /></p>
	            
	          </fieldset>
            </form>
        </div>
      </div>';
   
   
  } else
   print '
   
   <div class="border_box">
 <div class="loginform">
            <form method="post" action="login.php?action=1"> 
              <p><input type="hidden" name="rememberme" value="0" /></p>
              <fieldset>
			  
                <p><label for="username_2" class="top">Email Address:</label><br />
                  <input type="text" name="username" id="username" tabindex="1" class="field" value="" /></p>
    	        <p><label for="password" class="top">Password:</label><br />
                  <input type="password" name="password" id="password" tabindex="2" class="field" value="" /></p>
    	        
    	        <p><input type="submit" name="cmdweblogin" class="button" value="LOGIN"  /></p>
	            
	          </fieldset>
            </form>
        </div>
      </div>';?>
                          
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