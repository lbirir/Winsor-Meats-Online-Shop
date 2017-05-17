<!-- Welcome to the scripts database of HIOX INDIA      -->
<!-- This tool is developed and a copyright             -->
<!-- product of HIOX INDIA.			        -->
<!-- For more information visit http://www.hscripts.com -->
 <?php 
	include('header.php');
	include('config2.php');
	?>
    <?php 
	include("left_content.php");
	?>
<div class="center_content">
<div class="prod_box_big">
        	<div class="top_prod_box_big"></div>
            <div class="center_prod_box_big"> 
<?php
   include "auth/config.php";
   
   $ser=$_SERVER['HTTP_HOST'];
   $ref=$_SERVER['HTTP_REFERER'];
   $host= parse_url($ref);
    $rateval = $_POST['rating'];
   $url = $ref;
   $ipadd = $_SERVER['REMOTE_ADDR']; 
   $dat = date('y-m-d');

   $link = mysql_connect($hostname, $username,$password);
   
   if($link)
     {	
	$dbcon = mysql_select_db($dbname,$link);
     }

   $res  = mysql_query("select url from rating where ip='$ipadd' && url='$url'");
   $dd = mysql_fetch_array($res,MYSQL_BOTH);
   $val = $dd[0];

   

   if(!$val && $ser == $host[host])
    {
	echo"You rating has been accepted and added into the database.<br>Thanks for participating.";
	$result = mysql_query("insert into rating values(NULL,'$ipadd','$url','$dat','$rateval')",$link);
    }
   else
    {
	echo "Your Rating for this page is already present in the database. Thanks for your effort.";
    }
   
   echo "<br><br><a style=\"background-color:#ddffdd; text-decoration:none; cursor:pointer; border:1px solid red;\" href=\"$url\">Go Back</a></td></tr></table>";

?>
  <div class="bottom_prod_box_big"></div> </div> </div>
 </div>
 <?php 
	include("right_content.php");
	?>
     <?php 
	include("footer.php");
	?>
<!-- Welcome to the scripts database of HIOX INDIA      -->
<!-- This tool is developed and a copyright             -->
<!-- product of HIOX INDIA.			        -->
<!-- For more information visit http://www.hscripts.com -->
