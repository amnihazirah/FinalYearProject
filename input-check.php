<?php

	$def_off_act[1] = "Lecture";
	$def_off_act[2] = "Discussion";
	$def_off_act[3] = "Sleep";
	
	$def_on_act[1] = "Hit Ball";
	$def_on_act[2] = "Run";
	$def_on_act[3] = "Jump";
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>EXAMPLE</title>
	<?php include("header.php"); ?>
</head>
<body>
	<?php include("navbar.php"); ?>
	<table>
		<tr><td>Name: </td><td><?php echo $_POST['input_selectname']; ?></td></tr>
		<tr><td>Date: </td><td><?php echo $_POST['input_selectdate']; ?></td></tr>
		<tr><td>Off field Activity: </td><td><?php 
			echo ($_POST['off_activity'] == 999) ? $_POST['off_activity_other'] : $def_off_act[$_POST['off_activity']];
		?></td></tr>
		<tr><td>On field Activity: </td><td><?php 
			echo ($_POST['on_activity'] == 999) ? $_POST['on_activity_other'] : $def_on_act[$_POST['on_activity']];
		?></td></tr>
	</table>
	
	<?php
	
		$offactivity_check = $_POST['hb_rate'];
		$onactivity_check = $_POST['sport_act'];
		
		if(($offactivity_check>=60) && ($offactivity_check<=100)){
			echo 'Mood: Good mood!';
		}
		else if($offactivity_check<60){
			echo 'Mood: Okay!';
		}
		else if($offactivity_check>100 && ($offactivity_check<=150)){
			echo 'Mood: Slightly stressed';
		}
		else{
			echo 'Mood: Very Stressed!';
		}
	
	?>
	
	<br><button>Generate PDF here<button>
</body>
</html>