<?php
require('config.php');
require('header.php');

$page_id='Reset password';
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
   
   <p>You just need to enter the email address you registered with and we will send you a new one.</p>
   <p>Email Address:</p>
   <form method="post" action="resetpwd.php">
          <input type="text" name="emailadd" class="newsletter_input" value="<?php echo($_POST['emailadd']) ?>"/>
          <p><input type="submit"  value="Send Password" /> </p>        
           </form>
           
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
   
