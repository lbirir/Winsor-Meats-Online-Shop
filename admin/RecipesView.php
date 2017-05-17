<?php 
	  require('../config.php');
	  require("header.php");
	  require('../pagination.php');
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
	   $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
	$page = ($page == 0 ? 1 : $page);
	$perpage = 4;//limit in each page
	$startpoint = ($page * $perpage) - $perpage;
	
	$sql = @mysql_query("select * FROM `recipes` order by Recipe_id LIMIT $startpoint,$perpage");
	
	$query="SELECT * FROM recipes ORDER BY Recipe_id";
	$mysql = mysql_query($query) or die(mysql_error());
	$num_row = mysql_num_rows($mysql);
	   
	   ?>
       <?php  if($success>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Recipe added successfully</h3>');
	   }
	   $success = 0;
	   ?>
       <?php  if($deleted>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Recipe Deleted</h3>');
	   }
	   $deleted = 0;
	   ?>
       <?php  if($edited>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Recipe Edited</h3>');
	   }
	   $edited = 0;
	   ?>
       <h1><? echo($num_row);?> recipes available</h1> 
       <h2><a href="AddRecipe.php" title="Add New Recipe"><img src="img/add.gif" alt="Image description" title="Add New Recipe" />Add a new recipe</a></h2>
       
       <div class="column1-unit">
          <table>
            <tr>
                <th class="top" id="Pid">Recipe ID</th>
                <th class="top" id="name" scope="col">Recipe Name</th>
                <th class="top" scope="col">Description</th>
                <th class="top" scope="col">Photo</th>
                
                <th class="top" id="action" colspan="3">Action</th>
            </tr>
            <?php 
			while ($row = mysql_fetch_row($sql)){?>
					
            <tr class"highlight">
            	<td class="id"><?php echo ($row[0]);?></td>
            	<td><?php echo ($row[1]);?></td>
                <td><?php echo ($row[2]);?></td>
                
                <?php if ($row[6]=="") $row[6]="nothumb.jpg";?>
                <td class="img"><img class="prod" src="../recipeimg/<?php echo ($row[6]);?>"/></td>  
               	
               <?php //echo ($row[10]);?>
                
                
                <td class = "action"><a href="edit_recipe.php?id=<?php echo ($row[0]);?>" title="Edit Recipe"><img src="img/edit.gif"/></a></td>
                <td class = "action"><a href="delete_recipe.php?id=<?php echo ($row[0]);?>" title="Delete Recipe"><img src="img/delete.gif"/></a> </td>
                <td class = "action"> <input type="checkbox" name="select" id="checkbox" size="1" value="" /></td>
            </tr>
            <? }?>
          </table>
	<?php	 
	//show pages
	echo Pages("recipes",$perpage,"RecipesView.php?");
	?>
		   
		  
          <p class="caption"><strong>Table 6.1.</strong> Recipes</p>
        </div>
       
      </div>
    </div>
      
    <?php } ?> 
<?php require("footer.php");?>

