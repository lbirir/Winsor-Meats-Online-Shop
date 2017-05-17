<?php 
	  require('../config.php');
	  require("header.php");
	  ?>
<?php
   	if(!isset($_SESSION['WINSOR_ADMIN_LOGGED_IN']))
	{ exit( include('login.php'));}
	else
  	?>
    <?php if (isset($_SESSION['WINSOR_ADMIN_LOGGED_IN']))
	{
	?>

    <!-- B. MAIN -->
    <div class="main">
  
      <!-- B.1 MAIN CONTENT -->
      <div class="main-content">
       <h1 class="pagetitle"><img src="./img/categories.gif"/>Categories</h1>
       <?php 
	   $query="SELECT * FROM category ORDER BY CatID";
	   $sql = mysql_query($query) or die(mysql_error());
	   $num_row = mysql_num_rows($sql);
	   ?>
       <h1><img src="./img/edit.gif"/>Add Category</h1> 
       
       
       <div class="column1-unit">
          <div class="contactform">
            <form method="post" action="add_category.php">
              <fieldset><legend>&nbsp;CATEGORY DETAILS&nbsp;</legend>
                <?php if ($error > 0 ){
				echo('<p><span class="error"> * A required field is missing!</span></p>');}?>
                <p><label for="contact_firstname" class="left"> Name:</label>
                   <input type="text" name="name" id="contact_firstname" class="field"  value="<? echo ($_POST['name']); ?>" tabindex="1" /><span class="required">(*)</span></p>

                <p><label for="contact_message" class="left">Description:</label>
                   <textarea name="description" id="contact_message" cols="45" rows="10" tabindex="5"  ></textarea><span class="required">(*)</span></p>
                 <p><span class="required">* Required fields</span></p>
                <p><input type="submit" name="submit" id="submit" class="button" value="Save" tabindex="6" /></p>
                
              </fieldset>
            </form>
          </div>              
        </div>
        
         <h2><a href="CategoryView.php" title="Go back to Categories"><img src="img/arrow2.gif"/> Back to Categories</a> </h2> 
       
      </div>
    </div>
      
    <?php } ?> 
<?php require("footer.php");?>

