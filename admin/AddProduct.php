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
       <h1 class="pagetitle"><img src="./img/3.gif"/>Products</h1>
       <?php 
	   $query="SELECT * FROM products ORDER BY ProductID";
	   $sql = mysql_query($query) or die(mysql_error());
	   $num_row = mysql_num_rows($sql);
	   ?>
       <h1><img src="./img/edit.gif"/>Add Product</h1> 
       
       
       <div class="column1-unit">
          <div class="contactform">
            <form enctype="multipart/form-data" method="post" action="add_product.php">
              <fieldset><legend>&nbsp;PRODUCT DETAILS&nbsp;</legend>
                <?php if ($error > 0 ){
				echo('<p><span class="error"> * A required field is missing!</span></p>');}?>
                <p><label for="contact_firstname" class="left"> Name:</label>
                   <input type="text" name="name" id="contact_firstname" class="field"  value="<? echo ($_POST['name']); ?>" tabindex="1" /><span class="required">(*)</span></p>
                   
                <p><label for="contact_urgency" class="left">Category:</label>
                   <select name="category" id="cat" class="combo">
                   <option value="choose"> Select... </option>
                   <?php 
					   $query="SELECT * FROM category ORDER BY CatName";
					   $sql = mysql_query($query) or die(mysql_error());
					   while ($row = mysql_fetch_row($sql)) {
					?>   
                     <option value="<?php echo($row[0]);?>"><?php echo($row[1]);?></option>
                    <? } ?>
                    </select><span class="required">(*)</span></p>
                    
                    <p><label for="contact_firstname" class="left"> Price:</label>
                   <input type="text" name="price" id="contact_firstname" class="field"  value="<? echo ($_POST['price']); ?>" tabindex="1" /><span class="required">(*)</span></p>
                   
                   <p><label for="contact_firstname" class="left"> Image:</label>
                   
                   <input name="uploadedfile" type="file" size="50" value="<? echo ($_FILES['uploadedfile']['name']); ?>">
                   </p>

                <p><label for="contact_message" class="left">Description:</label>
                   <textarea name="description" id="contact_message" cols="45" rows="10" tabindex="5"  ></textarea><span class="required">(*)</span></p>
                   
                   <p><label for="contact_firstname" class="left"> Size:</label>
                   <input type="text" name="size" class="field"  value="<? echo ($_POST['size']); ?>" tabindex="1" /></p>
                   
                   <p><label for="contact_firstname" class="left"> Quantity:</label>
                   <input type="text" name="qty" class="field"  value="<? echo ($_POST['qty']); ?>" tabindex="1" /></p>
                   
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
<?php require("footer.php");?>

