<?php
session_start(); 
include "db_conn.php";

		
		$name = $_POST['input_selectname'];
		$date = $_POST['input_selectdate'];
		$off_activity = $_POST['off_activity'];
		$time_start = $_POST['time_start'];
		$time_end = $_POST['time_end'];
		
		$sql2 = "INSERT INTO off_field (off_userID, off_activity, time_start, time_end, date) VALUES ('$name', '$off_activity', '$time_start', '$time_end', '$date')";
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