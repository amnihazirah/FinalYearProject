<?php
session_start(); 
include "db_conn.php";
		
		$name = $_POST['input_selectname'];
		$date = $_POST['input_selectdate'];
		$time_start = $_POST['time_start'];
		$time_end = $_POST['time_end'];
		$on_activity = $_POST['on_activity'];
		$sport_act = $_POST['sport_act'];

		
		
	
			$sql2 = "INSERT INTO on_field (on_userID, on_activity, on_amount, time_start, time_end, date) VALUES ('$name', '$on_activity', '$sport_act', '$time_start', '$time_end', '$date')";
			$result2 = mysqli_query($conn, $sql2);
			
			if ($result2) {
				
				echo "Data added successfully!";
				exit();
			}
			else {
	           	
				echo "Error: " . $sql2 . "<br>" . $conn->error;
		        exit();
           }
		

?>