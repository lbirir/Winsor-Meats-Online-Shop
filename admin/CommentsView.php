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
	   $query="SELECT * FROM comments_data ORDER BY ID";
	   $sql = mysql_query($query) or die(mysql_error());
	   $num_row = mysql_num_rows($sql);
	   ?>
       
       <?php  if($deleted>0){
	    echo ('<h3 class="confirm"><img src="img/ok.gif"/>Comment deleted successfully</h3>');
	   }
	   $deleted = 0;
	   ?>
       
       <h1><? echo($num_row);?> comments made by consumers</h1> 
	   <div class="column1-unit">
          <table>
            <tr>
                <th class="top" id="id">Comment ID</th>
                <th class="top" id="time">Time</th>
                <th class="top" id="url" scope="col">URL</th>
                <th class="top" id="comment" scope="col">Comment</th>
                <th class="top" id="author" scope="col">Author</th>
               
                <th class="top" id="ip" scope="col">ip</th>
                
                <th class="top" id="action" colspan="2">Actions</th>
            </tr>
            <?php 
			while ($row = mysql_fetch_row($sql)){?>
					
            <tr class"highlight">
            	<td class="id"><?php echo ($row[0]);?></td>
            	<td class="time"><?php echo ($row[1]);?></td>
                <td class="url"><?php echo ($row[2]);?></td>
                <td class="comment"><?php echo ($row[3]);?></td>
                <td class="time"><?php echo ($row[4]);?></td>
                
                <td class="time"><?php echo ($row[7]);?></td>
                
				<td class = "action"><a href="delete_comment.php?id=<?php echo ($row[0]);?>" title="Delete Comment"><img src="img/delete.gif"/></a> </td>
                <td class = "action"> <input type="checkbox" name="select" id="checkbox" size="1" value="" /></td>
            </tr>
            <? }?>
          </table>
		  <p class="caption"><strong>Table 5.1.</strong> Comments</p>
        </div>
       
      </div>
    </div>
	
	<?php } ?> 
<?php require("footer.php");?>