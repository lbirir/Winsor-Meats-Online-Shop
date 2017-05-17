<?php 
	require('config.php');
	require('header.php');
	$page_id='Home';
?>           
    <div class="crumb_navigation">

    Navigation: <span class="current"> <?php echo($page_id); ?></span>
   
    </div>        
  <!--left content-->  
  <?php 
	include("left_content.php");
	?>
   <!-- end of left content -->
   
   <!--centre content-->
   <?php 
	include("index_center.php");
	?>
   <!-- end of center content -->
   
   
   <!--right_content-->
   <?php 
	include("right_content.php");
	?>
    <!-- end of right content -->   
   
            
   <!-- end of main content -->
   
<?php 
	require("footer.php");
?>