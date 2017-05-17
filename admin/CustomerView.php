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
       <h1 class="pagetitle"><img src="./img/tab-customers.gif"/>Customers</h1>
       <?php 
	   $query="SELECT * FROM customers ORDER BY CustID";
	   $sql = mysql_query($query) or die(mysql_error());
	   $num_row = mysql_num_rows($sql);
	   ?>
       <?php  if($success>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Customer added successfully</h3>');
	   }
	   $success = 0;
	   ?>
       <?php  if($deleted>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Customer Deleted</h3>');
	   }
	   $deleted = 0;
	   ?>
       <?php  if($edited>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Customer Edited</h3>');
	   }
	   $edited = 0;
	   ?>
       <h1><? echo($num_row);?> Registered Customers</h1> 
       
       
       <div class="column1-unit">
          <table>
            <tr>
                <th class="top" id="id">Customer ID</th>
                <th class="top" id="type">Type</th>
                <th class="top" id="surname" scope="col">Surname</th>
                <th class="top" id="firstname" scope="col">First Name</th>
                <th class="top" id="gender" scope="col">Gender</th>
                <th class="top" id="address" scope="col">Address</th>
                <th class="top" id="email" scope="col">Email Address</th>
                <th class="top" scope="col">Status</th>
                <th class="top" id="action" colspan="1">Actions</th>
            </tr>
            <?php 
			while ($row = mysql_fetch_row($sql)){?>
					
            <tr class"highlight">
            	<td class="id"><?php echo ($row[0]);?></td>
            	<td class="sname"><?php echo ($row[1]);?></td>
                <td class="sname"><?php echo ($row[2]);?></td>
                <td class="sname"><?php echo ($row[3]);?></td>
                <td class="gender"><?php echo ($row[9]);?></td>
                <td class="comment"><?php echo ($row[5]);?></td>
                <td class="email"><?php echo ($row[7]);?></td>
                <td class="status"><?php echo ($row[10]);?></td>
                
                <?php if ($row[10] =='Pending'){ ?>
                <td class = "action"> <a href="customer_activation.php?id=<?php echo ($row[0]);?>" title="Activate Customer"><img src="img/enabled.gif"/> </a>
					 </td> 
                <?php }
				else { ?>
				<td class = "action"> <a href="customer_deactivation.php?id=<?php echo ($row[0]);?>" title="Deactivate Customer"><img src="img/disabled.gif"/> </a>
					 </td>	<?php } ?>
                
                
            </tr>
            <? }?>
          </table>
          <p class="caption"><strong>Table 3.1.</strong> Customers</p>
        </div>
       
      </div>
    </div>
      
    <?php } ?> 
<?php require("footer.php");?>

