<?php
	session_start();
	include ('db_conn.php');
	$queryteam = "SELECT * FROM watchtest where name='Ali' AND date(time) = '2022-01-18' AND TIME(time)BETWEEN '21:30:00' AND '21:40:00'";
	$result_team = mysqli_query($conn, $queryteam);
	
	$off_field = "SELECT * FROM off_field where off_userID='Ali'";
	$offquery = mysqli_query($conn, $off_field);
	
	$msg1= 'Are you sure its the right measure?';
	$msg2= 'Good Mood!';
	$msg3= 'Slightly Stressed';
	$msg4= 'Very Stressed';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Input</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
</head>
<body>
	
	<div class="d-flex" id="wrapper">
    <!-- Page content-->
	<div class="main-panel">
		<div class="d-inline-flex p-2"><h2>Generate PDF</h2></div>
        <div class="content-wrapper">
		<div class='mx-4'> <span id="result"></span> </div>
			<div class='mx-4'>
			<a class="btn btn-primary mr-2" id="pdfbutton" onclick="TryTimer();">Start Interval</a>
			
			<a class="btn btn-primary mr-2" id="stopbutton" onclick="myStopFunction();">Stop Interval</a>
			
			</div>
			<!-- suggestion buat TIME(time) BETWEEN '$time_start' AND '$time_end'-->
			<div class='mx-4'>
						<?php
							$result= mysqli_query($conn,"SELECT AVG(heart) AS average FROM watchtest where name= 'Jane Watson' AND date(time) = '2022-01-18' AND TIME(time) BETWEEN '20:30:00' AND '20:50:00'");
							$row = mysqli_fetch_assoc($result); 
							$gname = mysqli_query ($conn, "SELECT * from watchtest where name='Jane Watson'");
							$getname = mysqli_fetch_assoc($gname); 
							$name = $getname['name'];

							$average = $row['average'];

							echo ("This is the average: $average, $name");
							
							if(($average>=60) && ($average<=100)){
												$mood = $msg2;
											}
											else if($average<60){
												$mood = $msg1;
											}
											else if($average>100 && ($average<=150)){
												$mood = $msg3;
											}
											else{
												$mood = $msg4;
											}
							echo $mood;
						?>
					</div>
			
			<div class="table-responsive pt-3">
						<table class="table table-bordered">
							<thead>
							<tr>
								<th>
									Name
								</th>
								<!-- <th>
									First name
								</th> -->
								<th>
									Mood
								</th>
								<th>
								Hearbeat count
								</th>
								<th>
									Date
								</th>
							</tr>
							</thead>
							<tbody>
								<?php
									while($rows1=mysqli_fetch_assoc($result_team))
									{
											$offactivity_check = $rows1['heart'];

											if(($offactivity_check>=60) && ($offactivity_check<=100)){
												$mood = $msg2;
											}
											else if($offactivity_check<60){
												$mood = $msg1;
											}
											else if($offactivity_check>100 && ($offactivity_check<=150)){
												$mood = $msg3;
											}
											else{
												$mood = $msg4;
											}
								?>
								<tr>
									<td><?php echo $rows1['name'];?></td>
									<td><?php echo $mood;?></td>
									<td><?php echo $rows1['heart'];?></td>
									<td><?php echo $rows1['time'];?></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						</div>
						
						<div class="table-responsive pt-3">
						<table class="table table-bordered">
							<thead>
							<tr>
								<th>
									Name
								</th>
								<th>
									Activity
								</th>
								<th>
									Time Start
								</th>
								<th>
									Time End
								</th>
								<th>
									Mood
								</th>
								<th>
								Hearbeat count
								</th>
								<th>
									Date
								</th>
							</tr>
							</thead>
							<tbody>
								<?php
									while($rows=mysqli_fetch_assoc($offquery))
									{
										
										if(($average>=60) && ($average<=100)){
												$mood = $msg2;
											}
											else if($average<60){
												$mood = $msg1;
											}
											else if($average>100 && ($average<=150)){
												$mood = $msg3;
											}
											else{
												$mood = $msg4;
											}	
								?>
								<tr>
									<td><?php echo $rows['off_userID'];?></td>
									<td><?php echo $rows['off_activity'];?></td>
									<td><?php echo $rows['time_start'];?></td>
									<td><?php echo $rows['time_end'];?></td>
									<td><?php echo $mood;?></td>
									<td><?php echo $average;?></td>
									<td><?php echo $rows['date'];?></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						</div>
		</div>
      </div>
	</div>
	<script>

			var timer;
			var input = "Ali";
			var heartbeat = 80;
			
			function TryTimer() {
				timer = setInterval(submitData, 60000, "First parameter");
			}

			function timeinterval() {
				const date = new Date();
				document.getElementById("result").innerHTML = date.toLocaleTimeString();
			}
			
			function submitData() {
	
			if(window.XMLHttpRequest) { 
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
				if (this.readyState === 4 && this.status ===200){
					document.getElementById("result").innerHTML = this.responseText;
					}
				};
				xmlhttp.open("GET","SubmitData.php?name=" +input+ "&heart=" +heartbeat, true); 
				xmlhttp.send();
			}
			
			}
			
			function myStopFunction() {
				clearInterval(timer);
			}
	</script>
</body>
</html>

