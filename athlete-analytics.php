<?php
	session_start(); 
	include('db_conn.php');
	$query="select * from off_field";
	$result=mysqli_query($conn, $query);
	$datacheck = $_SESSION['name'];
	

	$query1="select * from users where name='$datacheck'";
	$result1=mysqli_query($conn, $query1);
	
	$msg1= 'Okay!';
	$msg2= 'Normal';
	$msg3= 'Slightly Stressed';
	$msg4= 'Very Stressed';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Athlete's On-Field and Off-Field Activity</title>
		<!-- Favicon-->
		<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
		<!-- Core theme CSS (includes Bootstrap)-->
		<link href="css/styles.css" rel="stylesheet" />
	</head>
	<body>
		<div class="d-flex" id="wrapper">
		<!-- Sidebar-->
            <?php include ('athlete-1sidebar.php');?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php include ('athlete-1topnavigate.php');?>
                <!-- Page content-->
                <div class="main-panel">
					<div class="content-wrapper">
					  <div class="row">
					  
						<div class="col-lg-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Athlete's On-Field and Off-Field Activity</h4>
									<p class="card-description">
										
									</p>
									<?php
										while($row=mysqli_fetch_assoc($result1))
											{
												$getname=$row['name'];
									?>	
									<p class="card-description">
										<b>Off-field Activity</b>
									</p>
									<div class="table-responsive pt-3">
									<table class="table table-bordered">
										<thead class="table-primary">
										<tr>
											<th>
												Name
											</th>
											<th>
												Activity
											</th>
											<th>
												Date
											</th>
											<th>
												Time Start
											</th>
											<th>
												Time End
											</th>
											<th>
											Heart rate count
											</th>
											<th>
												Mood
											</th>
											
										</tr>
										</thead>
										<tbody>
											<?php
												$query_off="select * from off_field where off_userID='$getname'";
												$result_off= mysqli_query($conn, $query_off);
												while($rows=mysqli_fetch_assoc($result_off))
												{
														
											?>
											<tr>
												<td><?php $nameath= $rows['off_userID'];
												echo $nameath;
												?></td>
												<td><?php $activity =$rows['off_activity'];
												if ($activity==1){
													echo 'Lecture';
												}
												else if ($activity==2){
													echo 'Discussion';
												}
												else {
													echo 'Sleep';
												}
												?></td>
												<td><?php
												$timestamp= $rows['date'];
												$date = strtotime($timestamp);
												echo date('d/m/Y', $date);
												
												?></td>
												<td><?php $timestart=$rows['time_start'];
												

												echo $timestart;
												?></td>
												<td><?php $timeend= $rows['time_end'];
												echo $timeend;
												?></td>
												
												<td><?php 
												$resultavg= mysqli_query($conn,"SELECT AVG(heart) AS average FROM watchtest where date(time) = '$timestamp' AND TIME(time) BETWEEN '$timestart' AND '$timeend'");
												$row = mysqli_fetch_assoc($resultavg);
												$average = $row['average'];
												echo $average;?>
												</td>
												<?php 
												$resultavg= mysqli_query($conn,"SELECT AVG(heart) AS average FROM watchtest where date(time) = '$timestamp' AND TIME(time) BETWEEN '$timestart' AND '$timeend'");
												$row = mysqli_fetch_assoc($resultavg);
												$average = $row['average'];
												if(($average>=60) && ($average<=100)){
															?><td class= 'bg-success text-white'><?php echo  $msg2; ?></td><?php
														}
														else if($average<60){
															?><td class= 'bg-secondary text-white'><?php echo  $msg1; ?></td><?php
														}
														else if($average>100 && ($average<=150)){
															?><td class= 'bg-warning'><?php echo  $msg3; ?></td><?php
														}
														else{
															?><td class= 'bg-danger text-white'><?php echo  $msg2; ?></td><?php
														}
												?>
											</tr>
											<?php
												}
											?>
										</tbody>
									</table>
									</div>
									<p class="card-description">
										<b>On-field Training Performance</b>
									</p>
									<div class="table-responsive pt-3">
									<table class="table table-bordered">
										<thead class="table-primary">
										<tr>
											<th>
												Name
											</th>
											<th>
												Activity
											</th>
											<th>
												Date
											</th>
											
											<th>
											Amount/Times
											</th>
											<th>
												Training Indicator
											</th>
										</tr>
										</thead>
										<tbody>
											<?php
												$query_on="select * from on_field where on_userID='$getname'";
												$result_on= mysqli_query($conn, $query_on);
												while($row_on=mysqli_fetch_assoc($result_on))
												{
														
											?>
											<tr>
												<td><?php echo $row_on['on_userID'];
												
												?></td>
												<td><?php $activity1 =$row_on['on_activity'];
												echo $activity1;
												?></td>
												<td><?php
												$timestamp1= $row_on['date'];
												$date = strtotime($timestamp1);
												echo date('d/m/Y', $date);
												?>
												<td><?php echo $row_on['on_amount'];?></td>
												<?php
												$on_amount = $row_on['on_amount'];
												if(($on_amount>=25) && ($on_amount<=50)){
															?><td class= 'bg-success text-white'><?php echo  'Very Good'; ?></td><?php
														}
														else if($on_amount<5){
															?><td class= 'bg-secondary text-white'><?php echo  'Not Good'; ?></td><?php
														}
														else if($on_amount>6 && ($on_amount<=24)){
															?><td class= 'bg-warning'><?php echo  'Good'; ?></td><?php
														}
												
												?>
											</tr>
											<?php
												}
											?>
										</tbody>
									</table>
									</div>
									<hr>
									<?php
											}
									?>
								</div>
							</div>
						</div>
					  </div>
					</div>
				</div>
            </div>
        </div>
		<!-- Bootstrap core JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Core theme JS-->
		<script src="js/scripts.js"></script>
	</body>
</html>