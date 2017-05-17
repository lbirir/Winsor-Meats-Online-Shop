<?php 
	require('config.php');
	require('header.php');
	$page_id='Products';
	$prod_id = $_GET['id'];
	$productname = $_GET['productname'];
?>           
    <div class="crumb_navigation">

    Navigation: <span class="current"> <?php echo($page_id.' > '.$productname); ?></span>
   
    </div>        
    
    <!--left content-->  
  <?php 
	include("left_content.php");
	?>
   <!-- end of left content -->
   
   
   
   <div class="center_content">
   	<div class="center_title_bar"> <?php echo($productname);?></div>
    <?php 
    $res = mysql_query ( 'SELECT * FROM products WHERE ProductID = '.$prod_id.'');
	
	$i = 0;
	
	
	$id 	 = mysql_result($res,$i,"ProductID");
	$title = mysql_result($res,$i,"ProdName");
	$price  = mysql_result($res,$i,"ProdPrice");
	$photo = mysql_result($res,$i,"ProdPhoto");
	if ($photo=="") $photo="nothumb.jpg";
    ?>	
    
    
    <div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
                 <div class="product_img_big">
                 <a href="javascript:popImage('images/big_pic.jpg','Some Title')" title="header=[Zoom] body=[&nbsp;] fade=[on]"><img id="img" src="uploaded/<?php echo($photo);?>" alt="" title="" border="0" /></a>
                 
                 
                 </div>
                     <div class="details_big_box">
                         <div class="product_title_big"><?php echo($title);?></div>
                         <div class="specifications">
                         
                         <!-- DETAILS <br />
                          2G Network: <span class="blue">GSM 850/900/1800/1900</span><br />
                          3G Network: <span class="blue">UMTS 850/2100</span><br />
                          Size: <span class="blue">Dimensions - 96.5 x 46.5 16.4 mm</span><br />
                          Weight: <span class="blue">125 g</span><br />
                          Display: <span class="blue">TFT, 16M colors</span><br />
                          Sound: <span class="blue">Alert Type - Vibration, Polyphonic, MP3/AAC/AAC+ Player</span><br />
                          Memory: <span class="blue">Internal - 20 MB, Card Slot - up to 8 GB</span><br />
                          EDGE: <span class="blue">Yes, 236.8 Kbps</span><br />
                          3G: <span class="blue">Yes, 384 kbps</span><br />
                          Blutooth: <span class="blue">Yes, v2.0 with A2DP</span><br />
                          USB: <span class="blue">Yes, microUSB</span><br />
                          Camera: <span class="blue">Yes, 3.15 MP, 2045x1536 pixels, LED Flash</span><br />
                          Battery: <span class="blue">Standard, Li-ion</span><br />
                          Stand-by: <span class="blue">Up to 310 h</span><br />
                          Talk time: <span class="blue">Up to 6 h</span><br />
                          Extra: <span class="blue">Stainless Steel Case, PTT, T9, TV-out, Voice Memo</span><br /> -->
                          
                          Price:<div class="prod_price_big"><span class="price">Ksh <?php echo($price);?></span></div>
                          
                        
                       </div>
                         
                         
                         <a href="add_cart.php?id=<?php echo($prod_id);?>" class="addtocart">add to cart</a>
                         
                         
                         <!--<a href="#" class="compare">compare</a>-->
                     </div>                        
            </div>
			<div class="bottom_prod_box_big"></div>                                
        </div>
    <div class="prod_box_big">
   <div class="top_prod_box_big"></div>
            <div class="center_prod_box_big"> 
                      <?php
                      $hm = "D:/xampp/htdocs/winsor";
					  $hm2 = "http://localhost/winsor";
					  include "$hm/addcode.php";
					  ?>
					  </div>
					  <div class="bottom_prod_box_big"></div>
					  </div>
					  
	<div class="prod_box_big">
   <div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">				  
					   <?php 
	require("comments/comments.php");
	?>
    </div>
	<div class="bottom_prod_box_big"></div>
	</div>
                                                     
   <!--
   <div class="center_title_bar">Views</div>
   
   <div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Front</a></div>
                 <div class="product_img"><a href="details.html"><img src="uploaded/<?php echo($photo);?>" alt="" title="" border="0" /></a></div>
    		</div>
        	 <div class="bottom_prod_box"></div>  
   </div>
    <div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Side</a></div>
                 <div class="product_img"><a href="details.html"><img src="uploaded/<?php echo($photo);?>" alt="" title="" border="0" /></a></div>
    		</div>
        	 <div class="bottom_prod_box"></div>  
   </div>
    <div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Back</a></div>
                 <div class="product_img"><a href="details.html"><img src="uploaded/<?php echo($photo);?>" alt="" title="" border="0" /></a></div>
    		</div>
        	 <div class="bottom_prod_box"></div>  
   </div>
   
   -->
   
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