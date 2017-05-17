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
       <h1 class="pagetitle"><img src="./img/3.gif"/>Products</h1>
       <?php 
	   $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
	$page = ($page == 0 ? 1 : $page);
	$perpage = 6;//limit in each page
	$startpoint = ($page * $perpage) - $perpage;
	
	$sql = @mysql_query("select * FROM `products` order by ProductID LIMIT $startpoint,$perpage");
	
	$query="SELECT * FROM products ORDER BY ProductID";
	$mysql = mysql_query($query) or die(mysql_error());
	$num_row = mysql_num_rows($mysql);
	   
	   ?>
       <?php  if($success>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Product added successfully</h3>');
	   }
	   $success = 0;
	   ?>
       <?php  if($deleted>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Product Deleted</h3>');
	   }
	   $deleted = 0;
	   ?>
       <?php  if($edited>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Product Edited</h3>');
	   }
	   $edited = 0;
	   ?>
       <h1><? echo($num_row);?> products in your shop</h1> 
       <h2><a href="AddProduct.php" title="Add New Product"><img src="img/add.gif" alt="Image description" title="Add New Product" />Add a new product</a></h2>
       
       <div class="column1-unit">
          <table>
            <tr>
                <th class="top" id="Pid">Product ID</th>
                <th class="top" id="name" scope="col">Product Name</th>
                <th class="top" scope="col">Price (Ksh)</th>
                <th class="top" scope="col">Description</th>
                <th class="top" scope="col">Photo</th>
                <th class="top" id="qty">Qty</th>
                <th class="top" id="ava">Available</th>
                <th class="top" id="action" colspan="3">Action</th>
            </tr>
            <?php 
			while ($row = mysql_fetch_row($sql)){?>
					
            <tr class"highlight">
            	<td class="id"><?php echo ($row[0]);?></td>
            	<td><?php echo ($row[1]);?></td>
                <td><?php echo ($row[3]);?></td>
                <td><?php echo ($row[4]);?></td>
                <?php if ($row[5]=="") $row[5]="nothumb.jpg";?>
                <td class="img"><img class="prod" src="../uploaded/<?php echo ($row[5]);?>"/></td>  
               	<td id="qty"><?php echo ($row[8]);?></td>
               <?php //echo ($row[10]);?>
                <td class="ava"><a href="#" title="Change Avilability"><img src="img/enabled.gif"/></a></td>
                
                <td class = "action"><a href="edit_product.php?id=<?php echo ($row[0]);?>" title="Edit Product"><img src="img/edit.gif"/></a></td>
                <td class = "action"><a href="delete_product.php?id=<?php echo ($row[0]);?>" title="Delete Product"><img src="img/delete.gif"/></a> </td>
                <td class = "action"> <input type="checkbox" name="select" id="checkbox" size="1" value="" /></td>
            </tr>
            <? }?>
          </table>
	<?php	 
	//show pages
	echo Pages("products",$perpage,"ProductView.php?");
	?>
		   
		  
          <p class="caption"><strong>Table 2.1.</strong> Products</p>
        </div>
       
      </div>
    </div>
      
    <?php } ?> 
<?php require("footer.php");?>

