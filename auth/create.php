<!-- Welcome to the scripts database of HIOX INDIA      -->
<!-- This tool is developed and a copyright             -->
<!-- product of HIOX INDIA.			        -->
<!-- For more information visit http://www.hscripts.com -->

<?php

   $link = mysql_connect($hostname, $username,$password);

   if($link)
   {

 	$dbcon = mysql_select_db($dbname,$link);

	if($dbcon)
	{
	    	$result = mysql_query("create table hsrs(id BIGINT NOT NULL UNIQUE AUTO_INCREMENT,ip varchar(25),url varchar(250),dat date,rateval int)",$link);

		@mysql_free_result($link);

	 	if (!$result)
		{
		    echo(" <table width=100% height=100% align=center><tr><td>
				<table bgcolor=#aaddaa align=center width=300 height=300><tr>
				<td style=\"color: #aa2233; font-size: 15px;\" align=center>
				 Unable to create tables.<br>");
		    echo("Your tables might have already been created.</td></tr></table> </td></tr></table>");

		    //echo(mysql_error());
		}

		else
 	        {
		    include "message2.php";
		}
	}
	else
	{
		$vv =false;
	}
   }
   else
   {
	$vv =false;
   }

   if($vv === false)
   {
       echo	"<table width=100% height=100% align=center><tr><td>
		<table bgcolor=#aaddaa align=center width=300 height=300><tr>
			<td style=\"color: #aa2233; font-size: 15px;\" align=center>";
       echo "<form method=POST action=$PHP_SELF>";
       echo "<input type=hidden name=type value=changedb>";
       echo "<br><br><br>Unable to connect to the database. <br>
        	Please check your database entries <br><input type=submit value=dbentries>";
       echo "</form>";
       echo(" </td></tr></table> </td></tr></table>");

   }
?>

<!-- Welcome to the scripts database of HIOX INDIA      -->
<!-- This tool is developed and a copyright             -->
<!-- product of HIOX INDIA.			        -->
<!-- For more information visit http://www.hscripts.com -->
