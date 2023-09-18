<?php
	session_start(); 
	include('db_conn.php');
	$query="select * from on_field";
	$result=mysqli_query($conn, $query);

	
	$msg1= 'Okay!';
	$msg2= 'Good Mood!';
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
        <title>Athlete's On Field Training</title>
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
						<h4 class="card-title">Athlete's Training Performance</h4>
						
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
									while($rows=mysqli_fetch_assoc($result))
									{
											
								?>
								<tr>
									<td><?php $nameath= $rows['on_userID'];
									echo $nameath;
									?></td>
									<td><?php $activity =$rows['on_activity'];
									echo $activity;
									?></td>
									<td><?php
									$timestamp= $rows['date'];
									$date = strtotime($timestamp);
									echo date('d/m/Y', $date);
									
									?></td>
									<td><?php
									echo $rows['on_amount'];
									?></td>
									<?php
									$on_amount = $rows['on_amount'];
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
