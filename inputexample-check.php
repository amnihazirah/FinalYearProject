<?php 
include "db_conn.php";
		
		
		$name = $_POST['input_selectname'];
		$date = $_POST['input_selectdate'];
		$off_activity = $_POST['off_activity'];
		$time_start = $_POST['time_start'];
		$time_end = $_POST['time_end'];
		$on_activity = $_POST['on_activity'];
		$hb_rate = $_POST['hb_rate'];
		
		$sport_act = $_POST['sport_act'];
		
	
			$sql2 = "INSERT INTO input VALUES ('$name', '$date', '$off_activity', '$time_start', '$time_end', '$hb_rate', '$on_activity', '$sport_act')";
			$result2 = mysqli_query($conn, $sql2);
			
			if ($result2) {
				
				echo "Data added successfully!";
				exit();
			}
			else {
	           	
				echo "Data did not added successfully!";
		        exit();
           }
		

?>

