

<!-- Global IE fix to avoid layout crash when single word size wider than column width -->
<!--[if IE]><style type="text/css"> body {word-wrap: break-word;}</style><![endif]-->
<!-- B. MAIN -->
    <div class="main">
  
      <!-- B.1 MAIN CONTENT -->
      <div class="main-content">
<h1 class="block">ADMINISTRATOR LOGIN</h1>        
        <div class="column1-unit">
          <h1>Login</h1>
          <?php if ($error>0) { echo ('<p><h3 class="error"> *Access denied! User Email & Password do not match!</h3></p>'); }?>

<div class="loginform">
            <form method="post" action="checklogin.php"> 
              <p><input type="hidden" name="rememberme" value="0" /></p>
              <fieldset>
                <p><label for="username_1" class="top">User Email:</label><br />
                  <input type="text" name="email" id="email" tabindex="1" class="field" value="" /></p>
    	        <p><label for="password_1" class="top">Password:</label><br />
                  <input type="password" name="password" id="password" tabindex="2" class="field" value="" /></p>
    	        
    	        <p><input type="submit" name="cmdweblogin" class="button" value="LOGIN"  /></p>
	            
  	        </fieldset>
            </form>
          </div>
         </div>
        
	</div>
   </div>
        
<?php require("footer.php");?>