<?php 
	  require('../config.php');
	  require("header.php");
	  ?>
<div class="main">
  
      <!-- B.1 MAIN CONTENT -->
      <div class="main-content">
       <h1 class="pagetitle"><img src="./img/categories.gif"/>Categories</h1>
       <? if ($error<1)$cat_id = $_GET['id']; ?>
       <?php 
	   $query="SELECT * FROM category WHERE CatID = ".$cat_id."";
	   $sql = mysql_query($query) or die(mysql_error());
	   $num_row = mysql_num_rows($sql);
	   while ($row = mysql_fetch_row($sql)) {
	   ?>
       <h1><img src="./img/edit.gif"/>Edit Category</h1> 
       
       
       <div class="column1-unit">
          <div class="contactform">
          <? $action ="EditCategory.php?id=".$cat_id."";?>
            <form method="post" action="<?php echo $action;?> ">
              <fieldset><legend>&nbsp;CATEGORY DETAILS&nbsp;</legend>
                <?php if ($error > 0 ){
				echo('<p><span class="error"> * A required field is missing!</span></p>');}?>
                <p><label for="contact_firstname" class="left"> Name:</label>
                   <input type="text" name="name" id="contact_firstname" class="field"   value="<? echo ($row[1]); ?>" tabindex="1" /><span class="required">(*)</span></p>

                <p><label for="contact_message" class="left">Description:</label>
                   <textarea name="description" id="contact_message" cols="45" rows="10" tabindex="5" ><? echo ($row[2]); ?></textarea><span class="required">(*)</span></p>
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
