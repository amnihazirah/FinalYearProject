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
				<div class="d-inline-flex p-2"><h2>Hockey Teams</h2></div>
				<!-- Card
				<div class="container">
				<div class="row">
				<div class="card mb-3 m-4" style="max-width: 540px;">
				  <div class="row g-0">
					<div class="col-md-4">
					  <img src="images/sports-activities.jpg" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					  <div class="card-body">
						<h5 class="card-title">Athlete Data</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a href="coach-athlete-data.php" class="btn btn-primary">Click Here</a>
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
						<h5 class="card-title">Athlete Data Off field</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a href="coach-team-list.php" class="btn btn-primary">Click Here</a>
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
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a href="coach-input.php" class="btn btn-primary">Click Here</a>
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
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a href="coach-createpdf.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
				  </div>
				</div>
				</div>
				</div> -->
				<!-- Card -->
				<div class="container">
				<div class="row">
				<div class= "col-md m-4">

				  <div class="card" style="width: 18rem;">
				  <img src="images/78-780333_field-hockey-silhouette-png-transparent-png.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Team A</h5>
					<p class="card-text">Team A's athlete</p>
					<a href="coach-team-list.php" class="btn btn-primary">Click here</a>
				  </div>
				</div>

				</div>
				
				<div class= "col-md m-4">

				  <div class="card" style="width: 18rem;">
				  <img src="images/78-780333_field-hockey-silhouette-png-transparent-png.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Team B</h5>
					<p class="card-text">Team B's athlete</p>
					<a href="coach-team-list.php" class="btn btn-primary">Click here</a>
				  </div>
				</div>
				</div>
				
				<div class= "col-md m-4">

				  <div class="card" style="width: 18rem;">
				  <img src="images/78-780333_field-hockey-silhouette-png-transparent-png.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Team C</h5>
					<p class="card-text">Team C's athlete</p>
					<a href="coach-team-list.php" class="btn btn-primary">Click here</a>
				  </div>
				</div>
				</div>
				
				<div class="row">
				<div class= "col-md m-4">

				  <div class="card" style="width: 18rem;">
				  <img src="images/78-780333_field-hockey-silhouette-png-transparent-png.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Team D</h5>
					<p class="card-text">Team D's athlete</p>
					<a href="coach-team-list.php" class="btn btn-primary">Click here</a>
				  </div>
				</div>

				</div>
				
				<div class= "col-md m-4">

				  <div class="card" style="width: 18rem;">
				  <img src="images/78-780333_field-hockey-silhouette-png-transparent-png.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Team E</h5>
					<p class="card-text">Team E's athlete</p>
					<a href="coach-team-list.php" class="btn btn-primary">Click here</a>
				  </div>
				</div>
				</div>
				
				<div class= "col-md m-4">

				  <div class="card" style="width: 18rem;">
				  <img src="images/78-780333_field-hockey-silhouette-png-transparent-png.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Team F</h5>
					<p class="card-text">Team F's athlete</p>
					<a href="coach-team-list.php" class="btn btn-primary">Click here</a>
				  </div>
				</div>
				</div>
				
				</div>
				</div>
				
				</div>
				
				<!-- another card example
				<div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card-body">
                        <h5 class="card-title">Team</h5>
                        <p class="card-text">
                            Team Athlete Description
                        </p>
  
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            Click here
                        </a>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
					
					<div class="card-body">
                        <h5 class="card-title">Team</h5>
                        <p class="card-text">
                            Team Athlete Description
                        </p>
                          
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            Click here
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
		
		<div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card-body">
                        <h5 class="card-title">Team</h5>
                        <p class="card-text">
                            Team Athlete Description
                        </p>
  
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            Click here
                        </a>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
					
					<div class="card-body">
                        <h5 class="card-title">Team</h5>
                        <p class="card-text">
                            Team Athlete Description
                        </p>
                          
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            Click here
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> -->
				
				
		
		
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
