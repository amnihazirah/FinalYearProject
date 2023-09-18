<?php
	session_start(); 
	include('db_conn.php');
	$query="select * from off_field";
	$result=mysqli_query($conn, $query);

	
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
        <title>Home</title>
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
						<h4 class="card-title">Athlete's Off Field Activity</h4>
						<p class="card-description">
							Athlete's mood based on the activity
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
									while($rows=mysqli_fetch_assoc($result))
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
