
   <div class="left_content">
    <div class="title_box">Categories</div>
    
        <ul class="left_menu">
        <?php
			$result = mysql_query ( 'SELECT * FROM category ORDER BY CatName');
			$num_cat = mysql_num_rows($result);
			$i = 0;
			$cats_to_show = 12;
			while($i < $num_cat && $i < $cats_to_show) {
			
				$cat_id =	mysql_result($result,$i,'CatID');
				$cat_name = mysql_result($result,$i,'CatName');
				

				echo('<li class="odd"><a href="view_category.php?cat_id='.$cat_id.'&cat_name='.$cat_name.'">'.$cat_name.'</a></li>');
				
			$i++;
			
			}
		?>
       
        </ul> 
     
     
     
     
     
     
     
     
     
     <div class="banner_adds"></div>    
        
    
   </div>