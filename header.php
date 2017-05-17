<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Winsor Meats</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/pagination.css" />
<link rel="stylesheet" type="text/css" href="css/ThickBox.css" media="screen" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
<script type="text/javascript" src="js/jquery-dropdown.js"></script>
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>	
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>	
<script src="js/jquery-func.js" type="text/javascript"></script>
<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/thickbox.js"></script>
<!--<style type="text/css">
</style>-->
</head>
<body>


<div id="main_container">
	
	<div id="header">

       <div class="top_right">
       <!--
            <div class="languages">
                <div class="lang_text">Languages:</div>
                <a href="#" class="lang"><img src="images/en.gif" alt="" title="" border="0" /></a>
                <a href="#" class="lang"><img src="images/de.gif" alt="" title="" border="0" /></a>       
            </div>
            
            <div class="big_banner">
            <a href="#"><img src="images/banner728.jpg" alt="" title="" border="0" /></a>
            </div>
             -->
        </div>
    
        <!-- 
        <div id="logo">
            <a href="index.html"><img src="images/logo.png" alt="" title="" border="0" width="182" height="85" /></a>
            
	    </div>
        -->

        

    </div> 
    
   <div id="main_content">  
  <!-- <div id="menu_tab">
      <ul class="topnav">  
        <li><a href="index.php">Home</a></li>  
        <li>  
            <a href="products.php">Products</a>  
            <ul class="subnav">  
                <li><a href="#">Sub Nav Link</a></li>  
                <li><a href="#">Sub Nav Link</a></li>  
            </ul>  
        </li>  
       <li>  
           <a href="registration.php">Registration</a>  
           <ul class="subnav">  
               <li><a href="#">Sub Nav Link</a></li>  
               <li><a href="#">Sub Nav Link</a></li>  
           </ul>  
       </li>  
       <li><a href="my_account.php">My Account</a></li>  
       <li><a href="contact.php">Contact Us </a></li>  
       <li><a href="about_us.php">About</a></li>  
        
   </ul>  
   </div> -->
           
            <div id="menu_tab">
            <ul class="menu">
                         <li><a href="index.php" class="nav">  HOME </a></li>
                         <li class="divider"></li>
                         <li><a href="products.php" class="nav">PRODUCTS</a></li>
                         <li class="divider"></li>
                        <? if (empty($_SESSION['WINSOR_LOGGED_IN'])) {
	      					$cust_id;
      					?>
                         <li><a href="registration.php" class="nav">SIGN UP</a></li>
                         <li class="divider"></li>
                         <? } ?>
                         <? if (!empty($_SESSION['WINSOR_LOGGED_IN'])){
	      					$cust_id;
      					?>
                         <li><a href="my_account.php" class="nav">MY ACCOUNT</a></li>
                         <li class="divider"></li> 
                         <? } ?>
                         <li><a href="recipe.php" class="nav">RECIPES</a></li>
                         <li class="divider"></li>                     
                         <li><a href="contact.php" class="nav">CONTACT US</a></li>
                         <li class="divider"></li>
                         <li><a href="about_us.php" class="nav">ABOUT US</a></li>
                         
                    </ul>
                    
            </div> 
            
<!-- end of menu tab -->


 