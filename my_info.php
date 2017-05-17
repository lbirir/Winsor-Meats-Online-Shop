<?php 
	require('config.php');
	require('header.php');
	$page_id='My Personal Information';
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
   	<div class="center_title_bar">My Personal Information: <? echo($login_name); ?>  <img src="images/profiles.png"></div>
    
    
    
    <div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
            
                  
                         <div class="specifications">
                         
                         <?php 
    $res = mysql_query ( "SELECT * FROM customers WHERE CustId=". $_SESSION['WINSOR_LOGGED_IN']."");
	$num = mysql_num_rows($res);
	$i = 0;
	
	while($i < $num) {
	
	$surname	 = mysql_result($res,$i,"CustSurname");
	$firstname = mysql_result($res,$i,"CustOtherNames");
	$type  = mysql_result($res,$i,"CustType");
	$address = mysql_result($res,$i,"CustStreetAddress");
	$town = mysql_result($res,$i,"CustTown");
	$gender = mysql_result($res,$i,"CustGender");
	$phone = mysql_result($res,$i,"CustMobileNo");
	$password = mysql_result($res,$i,"CustPassword");
	$email = mysql_result($res,$i,"CustEmail");
    $i++;
	}
	?>      
                          <div class="contactform">
            <form method="post" action="edit_user.php">
              <fieldset><legend>&nbsp;PERSONAL DETAILS&nbsp;</legend>
              
                <div class="form_row">
                <label for="contact_type" class="contact">Type:</label>
                
                 	<select name="type" class="field">
                     <option value="<?php echo($type) ?>"><?php echo($type) ?></option>
                     <option value="Individual">Individual</option>S
                     <option value="Corporate">Corporate</option>
                     </select>
                  
                  </div>
                  
                <div class="form_row">
                <label for="contact_firstname_1" class="contact">First name:</label>
                 <input type="text" name="firstname" class="field" value="<?php echo($firstname) ?>" tabindex="1" />
                 <span class="required"> * </span></p>
                 </div>
                 
                <div class="form_row">
                <label for="contact_familyname_1" class="contact">Surname:</label>
                   <input type="text" name="surname" class="field" value="<?php echo($surname) ?>" tabindex="1" />
                   <span class="required"> * </span>
                   </div>
                   
                <div class="form_row"><label for="contact_street_1" class="contact">Street Address:</label>
                   <input type="text" name="address" class="field" value="<?php echo($address) ?>" tabindex="1" />
                   <span class="required"> * </span>
                   </div>
                   
                
                   
                <div class="form_row"><label for="contact_city_1" class="contact">Town:</label>
                  <input type="text" name="town" class="field" value="<?php echo($town) ?>" tabindex="1" />
                  <span class="required"> * </span>
                  </div>
                   
                <div class="form_row"><label for="contact_gender_1" class="contact">Gender:</label>
                   <select name="gender" class="field">
                     <option value="<?php echo($gender) ?>"><?php echo($gender) ?></option>
                     <option value="Male"> Male </option>
                     <option value="Female"> Female </option>
                     </select>
                     <span class="required"> * </span>
                     </div>
                     
                <div class="form_row"><label for="contact_phone_1" class="contact">Phone:</label>
                
                   <input type="text" name="phone"class="field" value="<?php echo($phone) ?>" tabindex="2" />
                   <span class="required"> * </span>
                   </div>
                   
                
              </fieldset>
              
              <fieldset><legend>&nbsp;ACCOUNT DETAILS&nbsp;</legend>
              	<div class="form_row"><label for="contact_subject_1" class="contact">Email address:</label>
                   <input type="text" name="email" class="field" value="<?php echo($email) ?>" tabindex="4" />
                   <span class="required"> * </span>
                   </div>
          
      			<div class="form_row"><label for="contact_subject_1" class="contact">Password:</label>
                   <input type="password" name="password" id="contact_subject_1" class="field" value="<?php echo($password) ?>" tabindex="4" />
                   <span class="required"> * </span>
                   </div>
                   
                   <?php if ($error>0){?><span  class="required" style="font-size:12px; float:right"> * required field missing    </span>			<? } ?>
                   <br />
       
                <input type="submit" name="submit" id="submit_1" class="button" value="Update" tabindex="6" />
                
                <br />
                   <br />
              </fieldset>
            </form>
          </div>
                          
                        
                       
                         
                         
                       
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