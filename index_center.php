<script type="text/javascript" src="slider.js"></script>
<script type="text/javascript"> 
$(document).ready(function() {		
	
	//Execute the slideShow, set 4 seconds for each images
	slideShow(4000);

});

function slideShow(speed) {


	//append a LI item to the UL list for displaying caption
	$('ul.slideshow').append('<li id="slideshow-caption" class="caption"><div class="slideshow-caption-container"><h3></h3><p></p></div></li>');

	//Set the opacity of all images to 0
	$('ul.slideshow li').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('ul.slideshow li:first').css({opacity: 1.0});
	
	//Get the caption of the first image from REL attribute and display it
	//$('#slideshow-caption h3').html($('ul.slideshow a:first').find('img').attr('title'));
	//$('#slideshow-caption p').html($('ul.slideshow a:first').find('img').attr('alt'));
		
	//Display the caption
	//$('#slideshow-caption').css({opacity: 0.7, bottom:0});
	
	//Call the gallery function to run the slideshow	
	var timer = setInterval('gallery()',speed);
	
	//pause the slideshow on mouse over
	$('ul.slideshow').hover(
		function () {
			clearInterval(timer);	
		}, 	
		function () {
			timer = setInterval('gallery()',speed);			
		}
	);
	
}

function gallery() {


	//if no IMGs have the show class, grab the first image
	var current = ($('ul.slideshow li.show')?  $('ul.slideshow li.show') : $('#ul.slideshow li:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().attr('id') == 'slideshow-caption')? $('ul.slideshow li:first') :current.next()) : $('ul.slideshow li:first'));
		
	//Get next image caption
	//var title = next.find('img').attr('title');	
	//var desc = next.find('img').attr('alt');	
		
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0}).addClass('show').animate({opacity: 1.0}, 1000);
	
	//Hide the caption first, and then set and display the caption
	//$('#slideshow-caption').slideToggle(300, function () { 
		//$('#slideshow-caption h3').html(title); 
		//$('#slideshow-caption p').html(desc); 
		//$('#slideshow-caption').slideToggle(500); 
	//});	

	//Hide the current image
	current.animate({opacity: 0.0}, 1000).removeClass('show');

}

</script>

<div class="center_content">

	<div id="gallery">   
  
  <ul class="slideshow">
  
    	<li class="show"><a href="#"> <img src="images/y3topholidayv2.jpg" alt="Serene View" title="Hotel" width="585" height="156"/> </a> </li>  
        <li><a href="#"> <img src="images/y2BusyNights.jpg" alt="Spacious" title="Hotel" width="585" height="156"/> </a> </li>
             
       	<li><a href="#"> <img src="images/y1Entertaining.jpg" alt="" title="Restaurant" width="585" height="156"/></a> </li>
        
  </ul>
       
</div>   

<div class="clear"></div>			
    
    
   	<div class="center_title_bar">Latest Products</div> 
    
   
    <?php 
    $res = mysql_query ( "SELECT * FROM products ORDER BY ProductID");
	$num_products = mysql_num_rows($res);
	$i = 0;
	
	while($i < 3) {
	
	$id 	 = mysql_result($res,$i,"ProductID");
	$title = mysql_result($res,$i,"ProdName");
	$price  = mysql_result($res,$i,"ProdPrice");
	$photo = mysql_result($res,$i,"ProdPhoto");
	if ($photo=="") $photo="nothumb.jpg";
	
	echo('<div class="prod_box">
        	
            <div class="center_prod_box">            
                 <div class="product_title"><a href="view_product.php?id='.$id.'&productname='.$title.'" title="'.$title.'">'.$title.'</a></div>
                 <div class="product_img"><a href="view_product.php?id='.$id.'&productname='.$title.'" title="'.$title.'"><img id="img" src="uploaded/'.$photo.'" alt="" border="0" /></a></div>
              <div class="prod_price"><span class="price"> Ksh '.$price.'</span></div>                        
            </div>
                        
            <div class="prod_details_tab">
                   
            <a href="view_product.php?id='.$id.'&productname='.$title.'" class="prod_details" title="View Product">View</a>   
			
			<a href="add_cart.php?id='.$id.'" class="prod_buy" title="Add to Cart">Add to Cart</a>
			         
            </div>                     
        </div>');
    
    
 
     	
		
		
		$i++;
		}
    ?>	
    
 
   </div>
   
 
 
 </div>