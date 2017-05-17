<?php 
	  require('../config.php');
	  require("header.php");
	  ?>
<?php
   	if(!isset($_SESSION['WINSOR_ADMIN_LOGGED_IN']))
	{ exit( include('login.php'));}
	else
  	?>
    <?php if (isset($_SESSION['WINSOR_ADMIN_LOGGED_IN']))
	{
	?>

    <!-- B. MAIN -->
    <div class="main">
  
      <!-- B.1 MAIN CONTENT -->
      <div class="main-content">
        
      <!-- Pagetitle -->
        <h1 class="pagetitle"><img src="./img/home.gif"/> Welcome to your Back Office</h1>
        <div class="contactform">
            <form method="post" action="add_category.php">
              <fieldset><legend>&nbsp;WINSOR STATISTICS&nbsp;</legend>
                
				
                <p><label class="label_1"></label>
               
                   </p>

                <p><label class="label_2"></label>
                
              </p>
                <p><label class="label_3"></label>
                
              </p>
                <p><label class="label_4"></label>
                
              </p>
                
              </fieldset>
            </form>
          </div>
      </div>
    </div>
     <?php } ?> 
<?php require("footer.php");?>

