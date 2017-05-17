<?php
require('config.php');
?>

<?php
	date_default_timezone_set('Europe/Amsterdam');
	//get ip address
	if (isset($_SERVER['HTTP_X_FORWARD_FOR'])) $ip = $_SERVER['HTTP_X_FORWARD_FOR'];
	else $ip = ip2long($_SERVER['REMOTE_ADDR']);

	//check if user (ip) has already voted for this object
	$query = "SELECT ip FROM vote WHERE ip = '".$ip."' AND id = 1";
	$result = mysql_query($query);
	$hasVoted = false;
	if (mysql_num_rows($result) == 1) {
		$hasVoted = true;
	}
	
	//save into the database, after clicking on the star
	if (isset($_GET['value'])) {
		$vote = (int) $_GET['value'];
		$id = (int) $_GET['id'];
		if ($vote == 0) {
			die("<p class='error'>Invalid vote value!</p>");
		}
		// not voted for this poll
		if ($hasVoted === false) {
			$query = "INSERT INTO vote SET id = ".$id.", ip = '".$ip."', `date`='".date('Y-m-d H:i:s')."', vote=".$vote;
			if (mysql_query($query)) {
				echo "<p class='confirm'>Your voting has been saved succesfully!</p>";
				echo "<a href='index.php'>Go back to the poll</a>";
				die();
			} else {
				echo "<p class='error'>Can't save the voting, ".mysql_error()."</p>";
			}
		} else {
			echo "<p class='error'>You have already voted for this poll!</p>";
		}
	}
	//get average votes
	$average = 0;
	$rs = mysql_query("SELECT avg(vote) as average FROM vote WHERE id = 1 GROUP BY id");
	if (mysql_num_rows($rs) > 0) {
		$row = mysql_fetch_assoc($rs);
		$average = round($row['average']); //round up to an integer
		$averageDecimal = round($row['average'], 2);
	}
	?>
	<div class="rating">
		<?php
		//show the stars one by one
		for ($j=1; $j<=5; $j++) {
			$onmouseout = "onmouseout='document.mouseover".$j.".src=image1.src'";
			$onmouseover = "onmouseover='document.mouseover".$j.".src=image2.src'";
			if ($j != 1) {
				$onmouseover = "onmouseover='document.mouseover1.src=image2.src;";
				for ($k=$j; $k>1; $k--){
					$onmouseover .= "document.mouseover".$k.".src=image2.src;";
				}
				$onmouseover .= "'";
			}
			$img = "<img src='star_off.png' alt='star' name='mouseover".$j."' />";
			
			//turn on the star which is smaller or equal as average, so if you have an average of 3, the 
			//first three stars will be turned on.
			if ($j<=$average) {
				$img = "<img src='star_on.png' alt='star' name='mouseover".$j."' />";
				$onmouseout = "onmouseout='document.mouseover".$j.".src=image2.src'";
				$onmouseover = "onmouseover='document.mouseover".$j.".src=image1.src'";
			} else {
				$onmouseout = "onmouseout='";
				for ($l=$j; $l>$average; $l--){
					$onmouseout .= "document.mouseover".$l.".src=image1.src;";
				}
				$onmouseout .= "'";
			}
			$title = array(1=>"Poor",2=>"Nothing special",3=>"Worth watching",4=>"Pretty cool",5=>"Freakin' awesome!");
			//if has not voted then you can vote, otherwise not able to click on the stars to vote
			if ($hasVoted === false) {
				?>
				<a title="<?php echo $title[$j];?>" <?php echo $onmouseout." ".$onmouseover;?> href='index.php?value=<?php echo $j;?>&amp;id=1'><?php echo $img;?></a>
				<?php
			} else {
				echo $img;
			}
		}
		$result = mysql_query("SELECT count(vote) as total FROM vote");
		$totalVotes = 0;
		if (mysql_num_rows($result) == 1) {
			$row = mysql_fetch_assoc($result);
			$totalVotes = $row['total'];
		}
		echo "<small> Average: ".$average." (".$averageDecimal.") ".$totalVotes." votes</small>";
		?>
		</div>
        