<?php 
	require('config.php');
	require('header.php');
	$page_id='Registration';
	$code = $_GET['code'];
    $pend = $_GET['pend'];

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
            
            <?php
			if($code=='' && $pend=='')
			{
				echo "<h2>ACCOUNT ACTIVATION</h2>";
				echo "Your account has successively been created. However you need to activate your account using the link sent to the email you have provided.";
			}
			else
			{
				if($pend!='')
				{
					echo "<h2>ACCOUNT ACTIVATION</h2>";
					echo "Your account has not yet been activated. An email containing an activation link was sent to you after registration using the email address provided. Please activate your account to access the services.";
				}
				else
				{
					$row=mysql_num_rows(mysql_query("Select * from customers where CustRegCode = '$code'"));
					if($row!=0)
					{
						?>
					<h2>REGISTRATION SUCCESSFUL</h2>
					<h3>Your account has successively been activated. 
					  </p>
					</h3>
					<?php
					mysql_query("UPDATE customers set CustStatus = 'activated' where CustRegCode = '$code'") or die("Unable to change status".mysql_error());
					}
					else
					{
						?>
					<h2>REGISTRATION UNSUCCESSFUL</h2>
					<h3>Your account is no longer listed in our database. Please contact the management or register again. This may be caused by reject of your registration request by either the transport manager or your departmental head.
					  </p>
					</h3>
                    <?php
					}
				}
			}
			?>     
                               
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