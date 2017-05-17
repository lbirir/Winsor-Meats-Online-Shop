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
   	<div class="center_title_bar">1. Registration Details</div>
    
    
    
    <div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
            
                  
                         <div class="specifications">
                         
                          <div class="contactform">
            <form name="registrationform" method="post" action="register_user.php" onsubmit="return formValidator ();">
              <fieldset><legend>&nbsp;PERSONAL DETAILS&nbsp;</legend>
              
                <div class="form_row">
                <label for="contact_type" class="contact">Type:</label>
                
                 	<select name="type" class="field">
                     <option value="choose"> Select... </option>
                     <option value="Individual"> Individual </option>
                     <option value="Corporate"> Corporate </option>
                     </select>
                  
                  </div>
                  
                <div class="form_row">
                <label for="contact_firstname_1" class="contact">First name:</label>
                 <input type="text" id="firstname" name="firstname" class="field" value="<?php echo($_POST['firstname']) ?>" tabindex="1" />
                 <span class="required"> * </span></p>
                 </div>
                 
                <div class="form_row">
                <label for="contact_familyname_1" class="contact">Surname:</label>
                   <input type="text" id="surname" name="surname" class="field" value="<?php echo($_POST['surname']) ?>" tabindex="1" />
                   <span class="required"> * </span>
                   </div>
                   
                <div class="form_row"><label for="contact_street_1" class="contact">Street Address:</label>
                   <input type="text" id="address" name="address" class="field" value="<?php echo($_POST['address']) ?>" tabindex="1" />
                   <span class="required"> * </span>
                   </div>
                   
                
                   
                <div class="form_row"><label for="contact_city_1" class="contact">Town:</label>
                  <input type="text" id="town" name="town" class="field" value="<?php echo($_POST['town']) ?>" tabindex="1" />
                  <span class="required"> * </span>
                  </div>
                   
                <div class="form_row">
                <label for="contact_gender_1" class="contact">Gender:</label>
                   <select id="gender" name="gender" class="field">
                     <option value="choose"> Select... </option>
                     <option value="Male"> Male </option>
                     <option value="Female"> Female </option>
                     </select>
                     <span class="required"> * </span>
                     </div>
                     
                <div class="form_row"><label for="contact_phone_1" class="contact">Phone:</label>
                
                   <input type="text" id="phone" name="phone"class="field" value="<?php echo($_POST['phone']) ?>" tabindex="2" />
                   <span class="required"> * </span>
                   </div>
                   
                
              </fieldset>
              
              <fieldset><legend>&nbsp;ACCOUNT DETAILS&nbsp;</legend>
              	<div class="form_row"><label for="contact_subject_1" class="contact">Email address:</label>
                   <input type="text" id="email" name="email" class="field" value="<?php echo($_POST['email']) ?>" tabindex="4" />
                   <span class="required"> * </span>
                   </div>
          
      			<div class="form_row"><label for="contact_subject_1" class="contact">Password:</label>
                   <input type="password" id="password" name="password"  class="field" value="<?php echo($_POST['password']) ?>" tabindex="4" />
                   <span class="required"> * </span>
                   </div>
                   
                <br />
                   <?php if ($error>0){?><span  class="required" style="font-size:12px; float:right"> * required field missing    </span>			<? } ?>
                   <br />
       
                <input type="submit" name="submit" id="submit_1" class="button" value="Register" tabindex="6" />
                
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