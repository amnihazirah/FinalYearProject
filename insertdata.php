<?php

include ("db_conn.php");
	
	$name = $_POST['name'];
	$age = $_POST['age'];
	$dob = $_POST['date'];
	$time = $_POST['time'];
	
	$query = "INSERT INTO inputexample VALUES ('$name', '$age', '$dob', '$time')";
	$query_run = mysqli_query($conn, $query);
	
	if($query_run){
		echo "Successfully Inserted";}
	else{
		echo "Error: " . $sql . "<br>" . $conn->error;}
?>