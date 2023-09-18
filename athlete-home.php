<?php
	session_start();
	include('db_conn.php');
	$datacheck = $_SESSION['name'];
	$query="select * from input where name = '$datacheck'";
	$result=mysqli_query($conn, $query);
	
	
	$msg1= 'Okay!';
	$msg2= 'Good Mood!';
	$msg3= 'Slightly Stressed';
	$msg4= 'Very Stressed';
?>
<html>
<head>
	<title>Athlete</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
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
				<div class="d-inline-flex p-2"><h2>Welcome to Field Hockey Sport Analysis, <?php echo $_SESSION['name'];?></h2></div>
		<div class="content-wrapper">
						<div class="container">
				<div class="row">
				<div class="card mb-3 m-4" style="max-width: 540px;">
				  <div class="row g-0">
					<div class="col-md-4">
					  <img src="images/sports-activities.jpg" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					  <div class="card-body">
						<h5 class="card-title">Hockey Training</h5>
						<p class="card-text">Enter training activity</p>
						<a href="athlete-input-training.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
				  </div>
				</div>
				<div class="card mb-3 m-4" style="max-width: 540px;">
				  <div class="row g-0">
					<div class="col-md-4">
					  <img src="images/study.webp" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					  <div class="card-body">
						<h5 class="card-title">Psychology Management</h5>
						<p class="card-text">Enter off-field activity</p>
						<a href="athlete-input.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
				  </div>
				</div>
				</div>
				
				<div class="row">
				<div class="card mb-3 m-4" style="max-width: 540px;">
				  <div class="row g-0">
					<div class="col-md-4">
					  <img src="images/analytics.jpg" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					  <div class="card-body">
						<h5 class="card-title">On-Field Training Performance</h5>
						<p class="card-text">Training Activity</p>
						<a href="athlete-training.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
				  </div>
				</div>
				
				<div class="card mb-3 m-4" style="max-width: 540px;">
				  <div class="row g-0">
					<div class="col-md-4">
					  <img src="images/study.webp" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					  <div class="card-body">
						<h5 class="card-title">Off-Field Activity</h5>
						<p class="card-text">The mood of the athlete</p>
						<a href="athlete-mood.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
				  </div>
				</div>

				</div>
				
				<div class="row">
				<div class="card mb-3 m-4" style="max-width: 540px;">
				  <div class="row g-0">
					<div class="col-md-4">
					  <img src="images/analytics.jpg" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					  <div class="card-body">
						<h5 class="card-title">Analytics</h5>
						<p class="card-text">Athlete's Training Performance and Psychology of Off field Activity</p>
						<a href="athlete-analytics.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
				  </div>
				</div>
				
				<div class="card mb-3 m-4" style="max-width: 540px;">
				  <div class="row g-0">
					<div class="col-md-4">
					  <img src="images/report.jpg" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					  <div class="card-body">
						<h5 class="card-title">Reports</h5>
						<p class="card-text">Produce a report</p>
						<a href="athlete-pdf.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
				  </div>
				</div>
				</div>
				
				</div>
		</div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer> -->
        <!-- partial -->
      </div>
            </div>
        </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
	<script src="myscript.js"></script>
  </body>
</html>
