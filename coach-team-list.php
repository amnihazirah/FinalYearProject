<?php
	session_start(); 
	include('db_conn.php');
	$query="select * from input";
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
						<h4 class="card-title">Daily Progress</h4>
						<p class="card-description">
							Mood of each day
						</p>
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
									while($rows=mysqli_fetch_assoc($result))
									{
											$offactivity_check = $rows['hb_count'];

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
									<td><?php echo $rows['name'];?></td>
									<td><?php echo $mood;?></td>
									<td><?php echo $rows['hb_count'];?></td>
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
