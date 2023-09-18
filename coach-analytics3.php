<?php
	session_start(); 
	include('db_conn.php');

	$query1="select * from users where user_type=2";
	$result1=mysqli_query($conn, $query1);
	

	
	$msg1= 'No';
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
            <?php include ('coach-1sidebar.php');?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php include ('coach-1topnavigate.php');?>
                <!-- Page content-->
                <div class="main-panel">
		
		<div class="content-wrapper">
          <div class="row">
		  
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Athlete's On-Field and Off-Field Activity</h4>
						<?php
							while($row=mysqli_fetch_assoc($result1))
								{
									$getname=$row['name'];
									$result_combine=mysqli_query($conn,"SELECT off_userID, off_activity, time_start, time_end, date from off_field UNION ALL SELECT on_userID as off_userID, on_activity as off_activity,time_start, time_end, date from on_field WHERE off_userID = '$getname' ORDER BY date");
						?>
						<p class="card-description">
							<b>Name: <?php echo $getname; ?></b>
						</p>	
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
									Date
								</th>
								<th>
									Time Start
								</th>
								<th>
									Time End
								</th>
								<th>
								Heart rate count/Training Amount
								</th>
								<th>
									Mood/Training Indicator
								</th>
								
							</tr>
							</thead>
							<tbody>
								<?php
									while($rows=mysqli_fetch_assoc($result_combine))
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
									
									else if ($activity==3){
										echo 'Sleep';
									}
									else if ($activity=="Hit Ball"){
										echo 'Hit Ball';
									}
									else if ($activity=="Jump"){
										echo 'Jump';
									}
									else if ($activity=="Run"){
										echo 'Run';
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
									$resultavg= mysqli_query($conn,"SELECT AVG(heart) AS average FROM watchtest where date(time) = '$timestamp' AND TIME(time) BETWEEN '$timestart' AND '$timeend' UNION SELECT on_amount from on_field");
									$row = mysqli_fetch_assoc($resultavg);
									$average = $row['average'];
									if ($average == NULL){
									$get_on_amount = mysqli_query($conn, "select on_amount from on_field where on_userID= '$getname'");
									$get_on = mysqli_fetch_assoc($get_on_amount);
									echo $get_on['on_amount'];
									}
									else{
										echo $average;
									}
									?>
									</td>
									<?php 
									$resultavg= mysqli_query($conn,"SELECT AVG(heart) AS average FROM watchtest where date(time) = '$timestamp' AND TIME(time) BETWEEN '$timestart' AND '$timeend'");
									$row = mysqli_fetch_assoc($resultavg);
									$average = $row['average'];
									if ($average == NULL){
										$get_on_amount = mysqli_query($conn, "select on_amount from on_field where on_userID= '$getname'");
										$get_on = mysqli_fetch_assoc($get_on_amount);
										$on_amount = $get_on['on_amount'];
										if(($on_amount>=25) && ($average<=50)){
												?><td class= 'bg-success text-white'><?php echo  'Very Good'; ?></td><?php
											}
											else if($on_amount<5){
												?><td class= 'bg-secondary text-white'><?php echo  'Not Good'; ?></td><?php
											}
											else if($on_amount>6 && ($on_amount<=24)){
												?><td class= 'bg-warning'><?php echo  'Good'; ?></td><?php
											}
											
									}
									else{
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
									}
									?>
								
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						</div>
						<?php
									}
								?>
					</div>
				</div>
			</div>
          </div>
        </div>
        <!-- content-wrapper ends -->

      </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
