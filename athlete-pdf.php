<?php
session_start();
include('db_conn.php');
$query = "SELECT name FROM users where user_type=2";
$result = mysqli_query($conn, $query);
?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Generate Report</title>
		<!-- Favicon-->
		<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
		<!-- Core theme CSS (includes Bootstrap)-->
		<link href="css/styles.css" rel="stylesheet" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
						<div class="d-inline-flex p-2"><h2>Get Athlete's Report in PDF</h2></div>
						<div class="content-wrapper">
							<div class='mx-2'>
								<a href="athlete-pdf-check.php" class="btn btn-primary">Generate Report</a>
							</div>
						</div>
					</div>
				</div>
		</div>
	</body>
</html>
