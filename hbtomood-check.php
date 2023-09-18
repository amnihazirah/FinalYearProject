<?php

include "db_conn.php";

		

		$name = $_POST['input_selectname'];
		$date = $_POST['input_selectdate'];
		$off_activity = $_POST['select_activity1'];
		$time_start = $_POST['time_start'];
		$time_end = $_POST['time_end'];
		
		$gname = mysqli_query ($conn, "SELECT * from watchtest where name='$name'");
		$getname = mysqli_fetch_assoc($gname);
		
		$getavg= mysqli_query($conn,"SELECT AVG(heart) AS average FROM watchtest where name= '$name' AND DATE(time) = '$date' AND TIME(time) BETWEEN '$time_start' AND '$time_end'");
		$row = mysqli_fetch_assoc($getavg); 

		$average_heart = $row['average'];

		
	
			$sql2 = "INSERT INTO off_field (off_userId, off_activity, time_start, time_end, date, off_heart) VALUES ('$name', '$off_activity', '$time_start', '$time_end', '$date', '$average_heart')";
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