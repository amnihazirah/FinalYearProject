<?php
	session_start();
	include('db_conn.php');
	$datacheck = $_SESSION['name'];
	$query="select * from users where name = '$datacheck'";
	$result=mysqli_query($conn, $query);
	
	$row = mysqli_fetch_assoc($result);
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profile</title>
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
                <div class="auth-form-light text-center py-5 px-4 px-sm-5">
                    <img class="img-thumbnail d-inline-flex p-2" src="images/blank-profile.png" alt="Profile" width="200" height="200">
					<div class= "card">
						<div class="card-body text-center">
						<div class="row">
							<div class="col-sm-3 col-md-2 col-5 ">
								<label style="font-weight:bold;">Full Name</label>
							</div>
							<div class="col-md-8 col-6">
								<?php echo $_SESSION['name'];?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 col-md-2 col-5 ">
								<label style="font-weight:bold;">Gender</label>
							</div>
							<div class="col-md-8 col-6">
								<?php 
									$genderprofile = $row['gender'];
									if ($genderprofile==1){
									echo "Male";}
									else {
										echo "Female";
									}
								?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 col-md-2 col-5 ">
								<label style="font-weight:bold;">Type</label>
							</div>
							<div class="col-md-8 col-6">
								<?php 
									$typeprofile = $row['user_type'];
									if ($typeprofile==1){
									echo "Coach";}
									else if ($typeprofile==2){
										echo "Athlete";
									}
									else {
										echo "Manager/Athlete";
									}
								?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 col-md-2 col-5">
								<label style="font-weight:bold;">DOB</label>
							</div>
							<div class="col-md-8 col-6">
								<?php echo $row['dob'];?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 col-md-2 col-5">
								<label style="font-weight:bold;">Address</label>
							</div>
							<div class="col-md-8 col-6">
								<?php echo $row['address'];?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 col-md-2 col-5">
								<label style="font-weight:bold;">E-mail</label>
							</div>
							<div class="col-md-8 col-6">
								<?php echo $row['email'];?>
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
