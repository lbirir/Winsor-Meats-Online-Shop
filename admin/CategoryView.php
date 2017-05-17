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
       <?php  if($success>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Category added successfully</h3>');
	   }
	   $success = 0;
	   ?>
       <?php  if($deleted>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Category Deleted</h3>');
	   }
	   $deleted = 0;
	   ?>
       <?php  if($edited>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Category Edited</h3>');
	   }
	   $edited = 0;
	   ?>
       <h1><? echo($num_row);?> categories in your shop</h1> 
       <h2><a href="AddCategory.php" title="Add New Category"><img src="img/add.gif" alt="Image description" title="Add New Category" />Add a new category</a></h2>
       
       <div class="column1-unit">
          <table>
            <tr>
                <th class="top" id="id">Category ID</th>
                <th class="top" id="name" scope="col">Category Name</th>
                <th class="top" scope="col">Description</th>
                <th class="top" id="action1" colspan="1">Actions</th>
            </tr>
            <?php 
			while ($row = mysql_fetch_row($sql)){?>
					
            <tr class"highlight">
            	<td class="id"><?php echo ($row[0]);?></td>
            	<td><?php echo ($row[1]);?></td>
                <td><?php echo ($row[2]);?></td>
                
                
                <td class = "action"><a href="edit_category.php?id=<?php echo ($row[0]);?>" title="Edit Category"><img src="img/edit.gif"/></a></td>
                
                
            </tr>
            <? }?>
          </table>
          <p class="caption"><strong>Table 1.1.</strong> Categories</p>
        </div>
       
      </div>
    </div>
      
    <?php } ?> 
<?php require("footer.php");?>