<?php 
	require('config.php');
	
	?>
   <div class="center_content">
   	<div class="center_title_bar"> Order Details     </div>
    <?php 
	if (empty($_SESSION['WINSOR_LOGGED_IN'])) {
	      $customer_id=0;
      }else $customer_id=$_SESSION['WINSOR_LOGGED_IN'];
   ?>
   
    
  
	<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big">            
                 
                     <div class="details_big_box">
                     <p><b>Please pay Ksh <?php echo $_GET['orderamount']; ?> via MPESA to 0727781371</p>
                     <p>To validate your payment please enter your MPESA CODE </b> </p>
                     <br /> <img src="images/mpesalogo.jpg" />
                     <p><b>MPESA Code:</b></p>
                      <form method="post" action="validatepay.php">
          <input type="text" name="mpesacode" class="newsletter_input" value="<?php echo($_POST['mpesacode']) ?>"/>
          <p><input type="submit"  value="Submit" /> </p>        
           </form>