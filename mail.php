<?php 	
// for mail using PEAR
include('Mail.php');
include('Mail/mime.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
// init vars
$crlf 		= "\n";
$from 		= 'leebirir@gmail.com';		// put you email here
$subject 	= 'Winsor Meats Ltd. -- Account Registration and Activation';
$to 		= $mail;		// put you email here

// build messages
$text = 'Welcome to Winsor Meats: Follow link to activate your account: < a href="http://tana/itc0711f072/gsm"><a>';
// build HTML mail message
$html = '<html><body>';
$html .= "<p>Welcome! \n\n";
$html .= "<p>Welcome to Winsor Meats: Follow link to activate your account: < a href='http://tana/itc0711f072/gsm'><a>Thank you for registering with Winsor Meats Ltd.\n\n";
$html .= '</body></html>';

$hdrs = array(
              'From'    => $from,
              'Subject' => $subject
);

$mime = new Mail_mime($crlf);

$mime->setTXTBody($text);
$mime->setHTMLBody($html);
$body = $mime->get();
$hdrs = $mime->headers($hdrs);
$mail =& Mail::factory('mail');

if ($mail->send($to, $hdrs, $body))
{
	echo '<p>mail sent';
}
else
{
	echo '<p>mail not sent';
	echo '<p>contact admin';
	exit;	
}

echo $html;


?>
</body>
</html>