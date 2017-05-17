<?php 
	  require('../config.php');
	  require("header.php");
	  ?>
<div class="main">
  
      <!-- B.1 MAIN CONTENT -->
      <div class="main-content">
       <h1 class="pagetitle"><img src="./img/categories.gif"/>Administrators</h1>
       <? if ($error<1)$admin_id = $_GET['id']; ?>
       <?php 
	   $query="SELECT * FROM administrators WHERE AdminID = ".$admin_id."";
	   $sql = mysql_query($query) or die(mysql_error());
	   $num_row = mysql_num_rows($sql);
	   while ($row = mysql_fetch_row($sql)) {
	   ?>
       <h1><img src="./img/edit.gif"/>Edit Users</h1> 
       
       
       <div class="column1-unit">
          <div class="contactform">
          <?php $action ="EditAdmins.php?id=".$admin_id."";?>
            <form method="post" action="<?php echo $action;?> ">
              <fieldset><legend>&nbsp;USER DETAILS&nbsp;</legend>
                <?php if ($error > 0 ){
				echo('<p><span class="error"> * A required field is missing!</span></p>');}?>
                <p><label for="contact_firstname" class="left">First Name:</label>
                   <input type="text" name="firstname" id="contact_firstname" class="field"   value="<?php echo ($row[2]); ?>" tabindex="1" /><span class="required">(*)</span></p>

                 <p><label for="contact_surname" class="left"> Surname:</label>
                   <input type="text" name="surname" id="contact_surname" class="field"  value="<?php echo ($row[1]); ?>" tabindex="2" /><span class="required">(*)</span></p>
                   
                   <p><label for="contact_email" class="left"> Email address:</label>
                   <input type="text" name="email" id="contact_email" class="field"  value="<?php echo ($row[4]); ?>" tabindex="3" /><span class="required">(*)</span></p>

                <p><label for="contact_password" class="left">Password:</label>
                   <input type="password" name="password" id="contact_password" class="field" value="<?php echo($row[5]); ?>" tabindex="4" /><span class="required">(*)</span></p>

                
                 <p><span class="required">* Required fields</span></p>
                <p><input type="submit" name="submit" id="submit" class="button" value="Save" tabindex="6" /></p>
                
              </fieldset>
            </form>
          </div>              
        </div>
        
         <h2><a href="AdminsView.php" title="Go back to Admin Users"><img src="img/arrow2.gif"/> Back to Admin Users</a> </h2> 
       
      </div>
    </div>
      
    <?php } ?> 
