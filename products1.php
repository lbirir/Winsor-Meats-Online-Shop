<?php 
	require('config.php');
	require('header.php');
	
	$page_id='Products';
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
   <div class="center_title_bar"><span class="blue"><a href="pdf.php" title="PDF Catalogue" target="_blank"> <img src="images/pdf.gif"> Create PDF Catalogue</a></span></div>
   	<div class="center_title_bar">All Products</div>
    <?php 
    $res = mysql_query ( "SELECT * FROM products ORDER BY ProductID DESC");
	$num_products = mysql_num_rows($res);
	$i = 0;
	
	while($i < $num_products) {
	
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