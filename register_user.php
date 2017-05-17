<?php
	include('config.php');
	$error = 0;
         // read post values if needed
       if (empty($_POST['firstname']))  
	   $error=1;
	   if (empty($_POST['surname']))
	   $error=2;
	   if (empty($_POST['address']))
	   $error=3;
	   if (empty($_POST['town']))
	   $error=4;
	   
	   if (empty($_POST['phone']))
	   $error=5;
	   if (empty($_POST['email']))
	   $error=6;
	   if (empty($_POST['password']))
	   $error=7;
	   
	   if (empty($_POST['type']))
	   $error=8;
	   if (empty($_POST['gender']))
	   $error=9;
	   
	   $emailValidation=mysql_query("Select * from customers where CustEmail = '".$_POST['email']."'") or die ("Unable to email");
	     
       if ($error > 0) {
	   exit(include('registration.php')); }
	   else if(mysql_num_rows($emailValidation)==0) 
	    
	  {
		  $activationKey =  mt_rand() . mt_rand() . mt_rand() . mt_rand() . mt_rand();
		  $password=$_POST['password'];
		  $pass=md5($password);
	  $query="INSERT INTO customers ( CustSurname, CustOtherNames, CustType, CustStreetAddress, CustTown, CustMobileNo, CustEmail, CustPassword, CustGender, CustRegCode, CustStatus) VALUES ('" .$_POST['surname'] . "', '" .$_POST['firstname'] . "', '" .$_POST['type'] . "','" .$_POST['address'] . "', '" .$_POST['town'] . "', '" .$_POST['phone'] . "','" .$_POST['email'] . "','$pass','" .$_POST['gender']."','$activationKey', 'Pending')";
	  $sql = mysql_query($query) or die(mysql_error());
	  
	   
	  $success=1;
	  $mail=$_POST['email'];
	  
	$to = "$mail";
	$subject = "Email account activation";
	$message = "Hello,\r\n";
    $message.="\r\n";

$message.="Your login details are :";

$message.="User Name : $email";
				
$message.="To activate your account, click on the following link:"; 
$message.="\r\n";
$message.="http://192.168.170.15/itc0712f008/winsor/reg_verify.php?code=$activationKey";
$message.="\r\n";
$message.="Kind regards,";
$message.="\r\n";
$message.="Winsor Meats Limited";

	$from = "leebirir@yahoo.com";
	$headers = "From: $from";
	mail($to,$subject,$message,$headers);
	
	


	  
	  include("reg_verify.php");
	  
	   
		} 
		else
		include('header.php');
		include('left_content.php');
		
		 print
		'<div class="center_content">
    <div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big"> 
		<p> The email address provided has already been registered in the system. Use the forgot password link to access your account.</p>  </div> 
		<div class="bottom_prod_box_big"></div> </div> </div> ';
		include('right_content.php');
		include('footer.php');

	

?>