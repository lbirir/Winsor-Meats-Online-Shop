<?php 
	require('config.php');
	require('header.php');
	$page_id='Products';
	$category_id = $_GET['cat_id'];
	$category_name = $_GET['cat_name'];
?>           
    <div class="crumb_navigation">

    Navigation: <span class="current"> <?php echo($page_id.' > '.$category_name); ?></span>
   
    </div>        
    
    <!--left content-->  
  <?php 
	include("left_content.php");
	?>
   <!-- end of left content -->
   
   
   
   <div class="center_content">
   	<div class="center_title_bar"> <?php echo($category_name);?></div>
    
    <?php 
	$res = mysql_query ( 'SELECT CatDescription FROM category WHERE CatID = '.$category_id.'');
	
	$Cat_Description = mysql_result($res,0,"CatDescription");
	
	?>
    
    <div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
                     <div class="details_big_box">
                         
                         <div class="specifications">
                         <div class="product_title_big">Category Description</div>
                          <?php echo($Cat_Description);?>
                        
                       </div>
                     </div>                        
            </div>
            <div class="bottom_prod_box_big"></div>                                
        </div>
    
 
  
   
   
   <?php 
    $res = mysql_query ( 'SELECT * FROM products WHERE CatID = '.$category_id.'');
	
	$i = 0;
	$num_products = mysql_num_rows($res);
	
	if ($num_products==0) 
	
	print'<div class="center_title_bar">'.$category_name.' not Available in stores at the moment</div>';
	
	else if($num_products>0)
	{
	print '<div class="center_title_bar">Available in stores</div>';
	while($i < $num_products)
	{
	$id 	 = mysql_result($res,$i,"ProductID");
	$title = mysql_result($res,$i,"ProdName");
	$price  = mysql_result($res,$i,"ProdPrice");
	$photo = mysql_result($res,$i,"ProdPhoto");
	if ($photo=="") $photo="nothumb.jpg";
	
	echo('<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="view_product.php?id='.$id.'&productname='.$title.'" title="'.$title.'">'.$title.'</a></div>
                 <div class="product_img"><a href="view_product.php?id='.$id.'&productname='.$title.'" title="'.$title.'"><img id="img" src="uploaded/'.$photo.'" alt="" border="0" /></a></div>
              <div class="prod_price"><span class="price"> Ksh '.$price.'</span></div>                        
            </div>
            <div class="bottom_prod_box"></div>             
            <div class="prod_details_tab">
                   
            <a href="view_product.php?id='.$id.'&productname='.$title.'" class="prod_details" title="View Product">View</a>   
			
			<a href="add_cart.php?id='.$id.'" class="prod_buy" title="Add to Cart">Add to Cart</a>
			         
            </div>                     
        </div>');
		
	$i++;
	}
	}
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