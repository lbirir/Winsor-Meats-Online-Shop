   <div class="right_content">
   
   <div class="title_box">Search</div>
       	  <div class="border_box">
          <form method="post" action="search_products.php">
          <input type="text" name="search" class="newsletter_input" />
          <input type="submit"  value="search"/>         
           </form>
      </div>
       <? if (!empty($_SESSION['WINSOR_LOGGED_IN'])){
	      					$cust_id;
      					?>
   		<div class="shopping_cart">
        
        	<? include ("check_cart.php")?>
        	<div class="title_box">Shopping cart</div>
            
            <div class="cart_details">
            <? echo($number) ?> products <br />
            <span class="border_cart"></span>
            Total: <span class="price">Ksh <? echo($cart_price) ?></span> 
            </div>
           
          <div class="cart_icon"><a href="view_cart.php" title=""><img src="images/shoppingcart.png" alt="" title="" width="35" height="35" border="0" /></a></div>
         
        </div> <? } ?>
   
   <?php //$_SESSION['WINSOR_LOGGED_IN_USERNAME']="ROY"; ?>
   <?php
   	if(!isset($_SESSION['WINSOR_LOGGED_IN']))
	{
  	?>
    
   <div class="title_box"><?php 
   
  if ($login_error==1) { print 'Login </div>
   
   <div class="border_box">
 <div class="loginform">
            <form method="post" action="login.php"> 
              <p><input type="hidden" name="rememberme" value="0" /></p>
              <fieldset>
			  	<p id="error">Login Error: User not found!</p>
                <p><label for="username_2" class="top">Email Address:</label><br />
                  <input type="text" name="username" id="username" tabindex="1" class="field" value="" /></p>
    	        <p><label for="password" class="top">Password:</label><br />
                  <input type="password" name="password" id="password" tabindex="2" class="field" value="" /></p>
    	        
    	        <p><input type="submit" name="cmdweblogin" class="button" value="LOGIN"  /></p>
	            
	          </fieldset>
            </form>
        </div>
		<span class="blue"><a href="forgtpwd.php">Forgot your password?</a></span>
      </div>';
   
   
  } else  if ($login_error==2) { print 'Login </div>
   
   <div class="border_box">
 <div class="loginform">
            <form method="post" action="login.php"> 
              <p><input type="hidden" name="rememberme" value="0" /></p>
              <fieldset>
			  	<p id="error">Login Error: Please activate your account from the email sent to you!</p>
                <p><label for="username_2" class="top">Email Address:</label><br />
                  <input type="text" name="username" id="username" tabindex="1" class="field" value="" /></p>
    	        <p><label for="password" class="top">Password:</label><br />
                  <input type="password" name="password" id="password" tabindex="2" class="field" value="" /></p>
    	        
    	        <p><input type="submit" name="cmdweblogin" class="button" value="LOGIN"  /></p>
	            
	          </fieldset>
            </form>
        </div>
		<span class="blue"><a href="forgtpwd.php">Forgot your password?</a></span>
      </div>';
   
   
  }else 
   print 'Login </div>
   
   <div class="border_box">
 <div class="loginform">
            <form method="post" action="login.php"> 
              <p><input type="hidden" name="rememberme" value="0" /></p>
              <fieldset>
			  
                <p><label for="username_2" class="top">Email Address:</label><br />
                  <input type="text" name="username" id="username" tabindex="1" class="field" value="" /></p>
    	        <p><label for="password" class="top">Password:</label><br />
                  <input type="password" name="password" id="password" tabindex="2" class="field" value="" /></p>
    	        
    	        <p><input type="submit" name="cmdweblogin" class="button" value="LOGIN"  /></p>
	            
	          </fieldset>
            </form>
        </div>
		<span class="blue"><a href="forgtpwd.php">Forgot your password?</a></span>
      </div>'; }  ?>
      
       
   
 
 
   <?php if (isset($_SESSION['WINSOR_LOGGED_IN']))
   print 
   '<div class="title_box">'.$_SESSION['WINSOR_LOGGED_NAME'].' '.$_SESSION['WINSOR_LOGGED_OTHERNAME'].'</div>
   <div class="border_box">
   			<br/>
   			<a href="my_account.php" class="logged">My Account</a><br/>
			<br/>
			<a href="order_history.php" class="logged">Order History</a><br/>
			<br/>
			<a href="logout.php" class="logged">Log Out</a><br/>
			<br/>
 
      </div>';?>
   
   
          
     <!--<div class="title_box">Newsletter</div>  
     <div class="border_box">
		<input type="text" name="newsletter" class="newsletter_input" value="your email"/>
        <a href="#" class="join">join</a>
     </div> -->
     
    <div class="title_box">What's new</div>  
     <div class="border_box">
     <?php 
    $res = mysql_query ( "SELECT * FROM products ORDER BY ProductID");
	$num_products = mysql_num_rows($res);
	$i = 0;
	
	while($i < 1) {
	
	$id 	 = mysql_result($res,$i,"ProductID");
	$title = mysql_result($res,$i,"ProdName");
	$price  = mysql_result($res,$i,"ProdPrice");
	$photo = mysql_result($res,$i,"ProdPhoto");
	if ($photo=="") $photo="nothumb.jpg";
	$i++;
	} ?>
         <div class="product_title"><? echo($title); ?></div>
         <div class="product_img"><a href="view_product.php?id=<? echo($id); ?>&productname=<? echo($title); ?>"><img id="img" src="uploaded/<? echo($photo); ?>" alt="" title="" border="0" /></a></div>
         <div class="prod_price"><span class="price"><? echo($price); ?></span></div>
     </div>  
     
     
     
    
     
     <div class="banner_adds"></div>        
     
   </div>