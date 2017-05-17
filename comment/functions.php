<?php
/* generates a $length-digit code */
function ACS_generateAntiSpamCode($length){
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789";
	$code = "";
	srand((double)microtime()*1000000);

	for($i=0;$i<$length;$i++){
		$num = rand()%33;
		$char = substr($chars,$num,1);
		$code .= $char;
	}

	return $code;
}

/* converts links in text to html-links */
function ACS_convertLinks($text){
	$text = eregi_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)','<a href="\\1" target="_blank">\\1</a>',$text);
	$text = eregi_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&//=]+)','\\1<a href="http://\\2" target="_blank">\\2</a>',$text);
	$text = eregi_replace('([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})','<a href="mailto:\\1">\\1</a>',$text);
	
	return $text;
}

/* prepare inserts */
function ACS_prepareInsert($text){
	$text = addslashes($text);
	$text = str_replace("<","&lt;",$text);
	$text = str_replace(">","&gt;",$text);
	$text = ACS_convertLinks($text);
	$text = str_replace("\n","<br />",$text);
	
	return $text;
}
?>