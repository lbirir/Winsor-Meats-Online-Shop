<?php


    require('config.php');
	require('header.php');
	require_once ('pagination.php');

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
   <span class="blue"><a href="pdf.php" title="PDF Catalogue" target="_blank"> <img src="images/pdf.gif"> Create PDF Catalogue</a></span>
   	<div class="center_title_bar">All Products</div>

<?php

	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
	$page = ($page == 0 ? 1 : $page);
	$perpage = 9;//limit in each page
	$startpoint = ($page * $perpage) - $perpage;

	$sql = @mysql_query("select * FROM `products` order by ProductID desc LIMIT $startpoint,$perpage");

while($Row = mysql_fetch_array($sql)) {
	
	$id 	 = $Row['ProductID'];
	$title = $Row['ProdName'];
	$price  = $Row['ProdPrice'];
	$photo = $Row['ProdPhoto'];
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
	
}

	//show pages
	echo Pages("products",$perpage,"product_pagination.php?");
	
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
   

