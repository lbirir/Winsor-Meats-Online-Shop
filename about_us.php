<?php 
	require('config.php');
	require('header.php');
	$page_id='About Us';

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
   	<div class="center_title_bar">About Us</div>
    
    	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
              	<p>Winsor Meats are wholesalers and retailers of prime quality beef, fish, poultry products, lamb, mutton, dairy products and processed meat products. </p> <p> 
Our Vision is: To be the leader and preferred company of choice in the processed meat products in the country.</p> <p>Our Mission is: To procure, process and market high quality meat products that meet both local and international standards using efficient, effective, environmental friendly systems to the satisfaction of the customers and other stake holders at competitive prices.
       </p> 
       <br /> 
       <p> <b> Our Location </b> </p>
              <p> <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=ufunguo+estate,+Nairobi,+Kenya&amp;aq=&amp;sll=-1.312086,36.812407&amp;sspn=0.005931,0.009645&amp;ie=UTF8&amp;hq=ufunguo&amp;hnear=Estate,+Kilimani,+Nairobi,+Nairobi+Province,+Kenya&amp;ll=-1.312276,36.811089&amp;spn=0.005931,0.009645&amp;z=14&amp;iwloc=A&amp;cid=16902256201828325732&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=ufunguo+estate,+Nairobi,+Kenya&amp;aq=&amp;sll=-1.312086,36.812407&amp;sspn=0.005931,0.009645&amp;ie=UTF8&amp;hq=ufunguo&amp;hnear=Estate,+Kilimani,+Nairobi,+Nairobi+Province,+Kenya&amp;ll=-1.312276,36.811089&amp;spn=0.005931,0.009645&amp;z=14&amp;iwloc=A&amp;cid=16902256201828325732" style="color:#0000FF;text-align:left">View Larger Map</a></small> <p>  
                                     
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