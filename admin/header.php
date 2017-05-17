<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="3600" />
  <meta name="revisit-after" content="2 days" />
  <meta name="robots" content="index,follow" />
  <meta name="publisher" content="Your publisher infos here ..." />
  <meta name="copyright" content="Your copyright infos here ..." />
  <meta name="author" content="Design: 1234.info / Modified: Your Name" />
  <meta name="distribution" content="global" />
  <meta name="description" content="Your page description here ..." />
  <meta name="keywords" content="Your keywords, keywords, keywords, here ..." />
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout1_setup.css" />
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout1_text.css" />
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/pagination.css" />
  <link rel="icon" type="image/x-icon=" href="" />
  
  <title>WINSOR Back-End</title>
</head>

<!-- Global IE fix to avoid layout crash when single word size wider than column width -->
<!--[if IE]><style type="text/css"> body {word-wrap: break-word;}</style><![endif]-->

<body>
  <!-- Main Page Container -->
  <div class="page-container">
  
    <div class="header">
      <!-- A.1 HEADER MIDDLE -->
      <div class="header-middle">   
   
        <!-- Sitelogo and sitename -->
        <a class="sitelogo" href="#" title="Go to Start page"></a>
        <div class="sitename">
          <h1><a href="index.php" title="Go to Start page">Winsor Meats Ltd</a></h1>
          <h2>Administration Back-End</h2>
        </div>

        <!-- Navigation Level 0 -->
        <div class="nav0">
          
        </div>			

        <!-- Navigation Level 1 -->
        <div class="nav1">
          <ul>
            <li><a href="index.php" title="Admin Home"><img src="./img/home.gif"/> Admin Home</a></li>
      																	
            <li><a href="../index.php" title="Go to Front-end" target="_blank"><img src="./img/front.gif" alt="Image description" /> Winsor Meats Front-End</a></li>
        </div>              
      </div>
      
       <!-- A.3 HEADER BOTTOM -->
      
      <?php
   	if(isset($_SESSION['WINSOR_ADMIN_LOGGED_IN']))
	{
	?>
      <div class="header-bottom">
      
        <!-- Navigation Level 2 (Drop-down menus) -->
        <div class="nav2">
	
          <!-- Navigation item -->
          <ul>
            <li><a href="index.php">Admin Home</a></li>
          </ul>
          
          <!-- Navigation item -->
          <ul>
            <li><a href="CategoryView.php">Categories<!--[if IE 7]><!--></a><!--<![endif]-->
              <!--[if lte IE 6]><table><tr><td><![endif]-->
                
              <!--[if lte IE 6]></td></tr></table></a><![endif]-->
            </li>
          </ul>          

          <!-- Navigation item -->
          <ul>
            <li><a href="ProductView.php">Products<!--[if IE 7]><!--></a><!--<![endif]-->
              <!--[if lte IE 6]><table><tr><td><![endif]-->
               
              <!--[if lte IE 6]></td></tr></table></a><![endif]-->
            </li>
          </ul>     
          <!-- Navigation item -->
          <ul>
            <li><a href="CustomerView.php">Customers</a></li>
          </ul>     
          <!-- Navigation item -->
          <ul>
            <li><a href="OrdersView.php">Orders</a></li>
          </ul>
          <!-- Navigation item -->
          <ul>
		  <!--<li><a href="CommentsView.php">Comments</a></li>
          </ul>-->
          <!-- Navigation item -->
          <ul>
          <li><a href="RecipesView.php">Recipes</a></li>
          </ul>
          <!-- Navigation item -->
          <ul>
            <li><a href="AdminsView.php">Admins</a></li>
          </ul>
          <!-- Navigation item -->
           <!--<ul>
            <li><a href="#">Reports</a></li>
          </ul> -->
        </div>
	  </div>

      <!-- A.4 HEADER BREADCRUMBS -->

      <!-- Breadcrumbs -->
      <div class="header-breadcrumbs">
         
        <div class="username" align="center">
        <?php echo($_SESSION['WINSOR_ADMIN_LOGGED_SURNAME']." ".$_SESSION['WINSOR_ADMIN_LOGGED_FIRSTNAME']);?>, <a href="logout.php">Logout</a>
        <div>

        <!-- Search form -->                  
        
      </div>
     </div>
     </div>
   
<?php } ?>
      
      </div>
      
 