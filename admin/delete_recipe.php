<?php
require('../config.php');

		$del_query="DELETE FROM recipes WHERE Recipe_id = ".$_GET['id']."";
        $del_sql = mysql_query($del_query) or die(mysql_error());
		$deleted=1;
	  include("RecipesView.php");
		
?>