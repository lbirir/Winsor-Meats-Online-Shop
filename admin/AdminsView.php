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
       <h1 class="pagetitle"><img src="./img/categories.gif"/>Administrators</h1>
       <?php 
	   $query="SELECT * FROM administrators ORDER BY AdminID";
	   $sql = mysql_query($query) or die(mysql_error());
	   $num_row = mysql_num_rows($sql);
	   ?>
       <?php  if($success>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Admin User added successfully</h3>');
	   }
	   $success = 0;
	   ?>
       <?php  if($deleted>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Admin User Deleted</h3>');
	   }
	   $deleted = 0;
	   ?>
       <?php  if($edited>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Admin User Edited</h3>');
	   }
	   $edited = 0;
	   ?>
       <h1><? echo($num_row);?> Admin Users</h1> 
       <a href="AddAdmin.php" title="Add New User"><img src="img/add.gif" alt="Image description" title="Add New User" />Add a new user</a></h2>
       
       <div class="column1-unit">
          <table>
            <tr>
                <th class="top" id="id">Admin ID</th>
                <th class="top" id="name" scope="col">Surname</th>
                <th class="top" scope="col">Other Names</th>
                <th class="top" id="action" colspan="4">Actions</th>
            </tr>
            <?php 
			while ($row = mysql_fetch_row($sql)){?>
					
            <tr class"highlight">
            	<td class="id"><?php echo ($row[0]);?></td>
            	<td><?php echo ($row[1]);?></td>
                <td><?php echo ($row[2]);?></td>
                
                
                <td class = "action"><a href="edit_admins.php?id=<?php echo ($row[0]);?>" title="Edit User"><img src="img/edit.gif"/></a></td>
                <td class = "action"><a href="delete_admin.php" title="Delete User"><img src="img/delete.gif"/></a> </td>
                <td class = "action"> <input type="checkbox" name="select" id="checkbox" size="1" value="" /></td>
            </tr>
            <? }?>
          </table>
          <p class="caption"><strong>Table 5.1.</strong> Admin Users</p>
        </div>
       
      </div>
    </div>
      
    <?php } ?> 
<?php require("footer.php");?>

