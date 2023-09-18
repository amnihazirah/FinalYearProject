<?php 
	include "db_conn.php";


		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET');
		
		$name = $_GET['name'];

		$hb_rate = $_GET['heart'];

		
	
		$sql2 = "INSERT INTO watchtest (name,heart) VALUES ('$name','$hb_rate')";
		$result2 = mysqli_query($conn, $sql2);
			
		if ($result2) {
				
			echo "Data added successfully!";
			exit();
		}
		else {
	           	
			echo "Error: " . $result2 . "<br>" . $conn->error;
		    exit();
		}
		

?>