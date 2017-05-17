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
       <h1 class="pagetitle"><img src="./img/3.gif"/>Recipes</h1>
       <?php 
	   $query="SELECT * FROM recipes ORDER BY Recipe_id";
	   $sql = mysql_query($query) or die(mysql_error());
	   $num_row = mysql_num_rows($sql);
	   ?>
       <h1><img src="./img/edit.gif"/>Add Recipe</h1> 
       
       
       <div class="column1-unit">
          <div class="contactform">
            <form enctype="multipart/form-data" method="post" action="add_recipe.php">
              <fieldset><legend>&nbsp;RECIPE DETAILS&nbsp;</legend>
                <?php if ($error > 0 ){
				echo('<p><span class="error"> * A required field is missing!</span></p>');}?>
                <p><label for="name" class="left"> Name:</label>
                   <input type="text" name="name" id="name" class="field"  value="<? echo ($_POST['name']); ?>" tabindex="1" /><span class="required">(*)</span></p>
                   
                <p><label for="category" class="left">Category:</label>
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
                    
                    
                   
                   <p><label for="image" class="left"> Image:</label>
                   
                   <input name="uploadedfile" type="file" size="50" value="<? echo ($_FILES['uploadedfile']['name']); ?>">
                   </p>

                <p><label for="description" class="left">Description:</label>
                   <textarea name="description" id="description" cols="45" rows="10" tabindex="5"  ></textarea><span class="required">(*)</span></p>
                   
                   <p><label for="ingredients" class="left">Ingredients:</label>
                   <textarea name="ingredients" id="ingredients" cols="45" rows="10" tabindex="6"  ></textarea><span class="required">(*)</span></p>
                   
                   <p><label for="instructions" class="left">Instructions:</label>
                   <textarea name="instructions" id="instructions" cols="45" rows="10" tabindex="7"  ></textarea><span class="required">(*)</span></p>
                   
                    <p><span class="required">* Required fields</span></p>
                <p><input type="submit" name="submit" id="submit" class="button" value="Save" tabindex="8" /></p>
                 
              </fieldset>
            </form>
          </div>              
        </div>
        
         <h2><a href="RecipesView.php" title="Go back to Recipes"><img src="img/arrow2.gif"/> Back to Recipes</a> </h2> 
       
      </div>
    </div>
      
    <?php } ?> 
<?php require("footer.php");?>

