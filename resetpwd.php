<?php
     include('config.php');
	     $email=$_POST['emailadd'];
		 $newpass=md5('123456');
		 
		 $validatemail=mysql_query("Select * from customers where CustEmail = '$email'") or die ("Unable to email");
		 if(mysql_num_rows($validatemail)==1){
		 
		 $query= "UPDATE customers SET CustPassword='$newpass' WHERE CustEmail = '$email' ";	
		 $sql = mysql_query($query) or die(mysql_error());
		 
		 $mail=$_POST['emailadd'];
	  
	$to = "$email";
	$subject = "Your Winsor Meats Account: Password Reset";
	 
	$messages= "Hello,\r\n";
$messages.="\r\n";
$messages.="Your account password has been reset to the default password on the fox theatres management site.";
$messages.="Your new password is 123456. You MUST change this password when you log in next.";
$messages.="\r\n";
$messages.="Winsor Meats Administration Team.\r\n";



	$from = "leebirir@yahoo.com";
	$headers = "From: $from";
	mail($to,$subject,$messages,$headers);
		

		 
		 include('header.php');
		include('left_content.php');
		
		 print
		'<div class="center_content">
         <div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big"> 
		<p> Your new password has been sent to your email. Please check your email to retrieve it.</p>  </div> 
		 <div class="bottom_prod_box_big"></div> </div> </div> ';
		include('right_content.php');
		include('footer.php');	
		 }
		 
		 else
		include('header.php');
		include('left_content.php');
		
		 print
		'<div class="center_content">
   
		<p> The email address provided does not exist in the system. You must be registered to change your password.</p>  </div> ';
		
		include('right_content.php');
		include('footer.php');
		 
	 
	 
		 
		 
	
	 
	 ?>
	 