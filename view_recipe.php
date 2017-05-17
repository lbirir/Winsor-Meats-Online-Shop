<?php 
	require('config.php');
	require('header.php');
	$page_id='Recipes';
	$recipe_id = $_GET['id'];
	$recipename = $_GET['recipename'];
?>           
    <div class="crumb_navigation">

    Navigation: <span class="current"> <?php echo($page_id.' > '.$recipename); ?></span>
   
    </div>        
    
    <!--left content-->  
  <?php 
	include("left_content.php");
	?>
   <!-- end of left content -->
   
   
   
   <div class="center_content">
   	<div class="center_title_bar"> <?php echo($recipename);?></div>
    <?php 
    $res = mysql_query ( 'SELECT * FROM recipes WHERE Recipe_id = '.$recipe_id.'');
	
	$i = 0;
	
	$id 	 = mysql_result($res,$i,"Recipe_id");
	$title = mysql_result($res,$i,"Recipe_name");
	$ingredients  = mysql_result($res,$i,"Ingredients");
	$instructions  = mysql_result($res,$i,"Instructions");
	$photo = mysql_result($res,$i,"Image");
	if ($photo=="") $photo="nothumb.jpg";
    ?>	
    
    
    <div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big"> 
            
            <div class="product_img_big">
                 <a href="javascript:popImage('images/big_pic.jpg','Some Title')" title="header=[Zoom] body=[&nbsp;] fade=[on]"><img id="img" src="recipeimg/<?php echo($photo);?>" alt="" title="" border="0" /></a>
            
            <div class="details_big_box">
                         <div class="product_title_big"><?php echo($title);?></div>
                         <div class="specifications">
                         
                         <span class="blue">Ingredients:</span><div><?php echo ($ingredients);?></div>
                        <br /> <span class="blue">Instructions:</span><div><?php echo ($instructions);?></div>
                         </div>
                       </div>                        
            </div>
			<div class="bottom_prod_box_big"></div>                                
        </div>
        </div>
        
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