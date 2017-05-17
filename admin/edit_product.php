<?php 
	  require('../config.php');
	  require("header.php");
	  ?>
<div class="main">
  
      <!-- B.1 MAIN CONTENT -->
      <div class="main-content">
       <h1 class="pagetitle"><img src="./img/3.gif"/>Products</h1>
       <? if ($error<1)$pro_id = $_GET['id']; ?>
       <?php 
	   $query="SELECT * FROM products WHERE ProductID = ".$pro_id."";
	   $sql = mysql_query($query) or die(mysql_error());
	   $num_row = mysql_num_rows($sql);
	   while ($row = mysql_fetch_row($sql)) {
	   ?>
       <h1><img src="./img/edit.gif"/>Edit Product</h1> 
       
       
       <div class="column1-unit">
          <div class="contactform">
          <? $action ="editProduct.php?id=".$pro_id."";?>
            <form enctype="multipart/form-data" method="post" action="<?php echo $action;?> ">
              <fieldset><legend>&nbsp;PRODUCT DETAILS&nbsp;</legend>
                <?php if ($error > 0 ){
				echo('<p><span class="error"> * A required field is missing!</span></p>');}?>
                <p><label for="contact_firstname" class="left"> Name:</label>
                   <input type="text" name="name" id="contact_firstname" class="field"  value="<? echo ($row[1]); ?>" tabindex="1" /><span class="required">(*)</span></p>
                   
                <p><label for="contact_urgency" class="left">Category:</label>
                   <select name="category" id="cat" class="combo">
                   <option value="<? echo ($row[2]); ?>" selected><?php 
					   $catquery="SELECT CatName FROM category WHERE CatID=".$row[2]."";
					   $catsql = mysql_query($catquery) or die(mysql_error());
					   if($catrows = mysql_fetch_row($catsql)) echo ($catrows[0]);?></option>
                   <?php 
					   $cat_query="SELECT * FROM category ORDER BY CatName";
					   $cat_sql = mysql_query($cat_query) or die(mysql_error());
					   while ($cat_row = mysql_fetch_row($cat_sql)) {
					?>   
                     <option value="<?php echo($cat_row[0]);?>"><?php echo($cat_row[1]);?></option>
                    <? } ?>
                    </select><span class="required">(*)</span></p>
                    
                    <p><label for="contact_firstname" class="left"> Price:</label>
                   <input type="text" name="price" id="contact_firstname" class="field"  value="<? echo ($row[3]); ?>" tabindex="1" /><span class="required">(*)</span></p>
                   
                   <p><label for="contact_firstname" class="left"> Image:</label>
                   
                   <input name="uploadedfile" type="file" size="50" value="<? echo ($row[5]); ?>">
                   </p>

                <p><label for="contact_message" class="left">Description:</label>
                   <textarea name="description" id="contact_message" cols="45" rows="10" tabindex="5"  ><? echo ($row[4]); ?></textarea><span class="required">(*)</span></p>
                   
                   <p><label for="contact_firstname" class="left"> Size:</label>
                   <input type="text" name="size" class="field"  value="<? echo ($row[7]); ?>" tabindex="1" /></p>
                   
                   <p><label for="contact_firstname" class="left"> Quantity:</label>
                   <input type="text" name="qty" class="field"  value="<? echo ($row[8]); ?>" tabindex="1" /></p>
                   <p><span class="required">* Required fields</span></p>
                <p><input type="submit" name="submit" id="submit" class="button" value="Save" tabindex="6" /></p>
                   
                   
                   
                 
                
              </fieldset>
            </form>
          </div>              
        </div>
        
         <h2><a href="ProductView.php" title="Go back to Products"><img src="img/arrow2.gif"/> Back to Products</a> </h2> 
       
      </div>
    </div>
      
    <?php } ?> 
