<?php


    require('config.php');
	require('header.php');
	require_once ('pagination.php');

$page_id='Recipes';

?>
<div class="crumb_navigation">

    Navigation: <span class="current"> <?php echo($page_id); ?></span>
   
    </div>        
    
    <!--left content-->  
  <?php 
	include("left_content.php");
	?>
   <!-- end of left content -->
   
   <div class="center_content">
   <div class="center_title_bar">Recipes</div>
   <?php

	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
	$page = ($page == 0 ? 1 : $page);
	$perpage = 9;//limit in each page
	$startpoint = ($page * $perpage) - $perpage;

	$sql = @mysql_query("select * FROM `recipes` order by Recipe_id LIMIT  $startpoint,$perpage");

while($Row = mysql_fetch_array($sql)) {
	
	$id 	 = $Row['Recipe_id'];
	$title = $Row['Recipe_name'];
	
	echo('           
                 <div class="product_title"><a href="view_recipe.php?id='.$id.'&recipename='.$title.'" title="'.$title.'">'.$title.'</a></div>
				 
				 
				 ');
}
?>

<?php
//show pages
	echo Pages("recipes",$perpage,"recipe.php?");
	?>
	
  </div><!-- end of center content -->
   
   <!-- right_contenet-->
   <?php 
	include("right_content.php");
	?>
   <!-- end of right content -->   
   
            
   </div><!-- end of main content -->
   
<?php 
	require("footer.php");
?>
   
	
	