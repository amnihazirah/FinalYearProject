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
				<div class="d-inline-flex p-2"><h2>Welcome to Field Hockey Sport Analysis, <?php echo $_SESSION['name'];?></h2></div>
				
				<!-- Card -->
				<div class="container">
				<div class="row">
				<div class="card mb-3 m-4" style="max-width: 540px;">
				  <div class="row g-0">
					<div class="col-md-4">
					  <img src="images/sports-activities.jpg" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					  <div class="card-body">
						<h5 class="card-title">Athlete Personal Details</h5>
						<p class="card-text">Enter Athlete's Details</p>
						<a href="coach-athlete-data.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
				  </div>
				</div>
				<div class="card mb-3 m-4" style="max-width: 540px;">
				  <div class="row g-0">
					<div class="col-md-4">
					  <img src="images/analytics.jpg" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					  <div class="card-body">
						<h5 class="card-title">Hockey Training</h5>
						<p class="card-text">Enter Athlete's Hockey Training</p>
						<a href="coach-input.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
				  </div>
				</div>
				</div>
				
				<div class="row">
				<div class="card mb-3 m-4" style="max-width: 540px;">
				  <div class="row g-0">
					<div class="col-md-4">
					  <img src="images/sports-activities.jpg" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					  <div class="card-body">
						<h5 class="card-title">Athlete's Training Performance</h5>
						<p class="card-text">Training Activity</p>
						<a href="coach-team-training.php" class="btn btn-primary">Click Here</a>
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
						<h5 class="card-title">Athlete Education Activities</h5>
						<p class="card-text">The mood of the athletes</p>
						<a href="coach-team-mood.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
				  </div>
				</div>
				
				</div>
				
				<div class="row">
				<div class="card mb-3 m-4" style="max-width: 540px;">
				  <div class="row g-0">
					<div class="col-md-4">
					  <img src="images/study.webp" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-8">
					  <div class="card-body">
						<h5 class="card-title">Analytics</h5>
						<p class="card-text">Athlete's Training Performance and Psychology of Off field Activity</p>
						<a href="coach-analytics.php" class="btn btn-primary">Click Here</a>
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
						<p class="card-text">Produce reports of the Athletes</p>
						<a href="pdf-database.php" class="m-4 btn btn-primary">Click Here</a>
					  </div>
					</div>
				  </div>
				</div>
				</div>
				</div>
				<!-- Card
				<div class="container">
				<div class="row">
					<div class="card mb-3">
					  <img src="..." class="card-img-top" alt="...">
					  <div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a href="coach-team-list.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
					<div class="card mb-3">
					  <img src="..." class="card-img-top" alt="...">
					  <div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a href="coach-team-list.php" class="btn btn-primary">Click Here</a>
					  </div>
					</div>
				</div>
				<div class="row">
					<div class="card mb-3">
					  <img src="..." class="card-img-top" alt="...">
					  <div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					  </div>
					</div>
					<div class="card mb-3">
					  <img src="..." class="card-img-top" alt="...">
					  <div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					  </div>
					</div>
				</div>
				
				</div> -->
				<!-- Card
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
				
				</div>
				<div class="row">
				<div class= "col-md m-4">
				  <div class="card" style="width: 18rem;">
				  <img src="images/78-780333_field-hockey-silhouette-png-transparent-png.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Team C</h5>
					<p class="card-text">Team C's athlete</p>
					<a href="coach-team-list.php" class="btn btn-primary">Click Here</a>
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
				
				
		
		<!-- <div class="content-wrapper">
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
            <!-- <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Team Table</h4>
                  <p class="card-description">
                    Athlete Description
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            User
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Mood
                          </th>
                          <th>
                            Description
                          </th>
                          <th>
                            Date
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            Stressed
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face2.jpg" alt="image"/>
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            Happy
                          </td>
                          <td>
                            July 1, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face3.jpg" alt="image"/>
                          </td>
                          <td>
                            John Richards
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            Happy
                          </td>
                          <td>
                            Apr 12, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face4.jpg" alt="image"/>
                          </td>
                          <td>
                            Peter Meggik
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            Slightly Stressed
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face5.jpg" alt="image"/>
                          </td>
                          <td>
                            Edward
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            Very Stressed
                          </td>
                          <td>
                            May 03, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face6.jpg" alt="image"/>
                          </td>
                          <td>
                            John Doe
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            Slightly stressed
                          </td>
                          <td>
                            April 05, 2015
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face7.jpg" alt="image"/>
                          </td>
                          <td>
                            Henry Tom
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            Very Stressed
                          </td>
                          <td>
                            June 16, 2015
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            First name
                          </th>
                          <th>
                            Progress
                          </th>
                          <th>
                            Amount
                          </th>
                          <th>
                            Deadline
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Messsy Adam
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $245.30
                          </td>
                          <td>
                            July 1, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            John Richards
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $138.00
                          </td>
                          <td>
                            Apr 12, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Peter Meggik
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 77.99
                          </td>
                          <td>
                            May 15, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Edward
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 160.25
                          </td>
                          <td>
                            May 03, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            John Doe
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 123.21
                          </td>
                          <td>
                            April 05, 2015
                          </td>
                        </tr>
                        <tr>
                          <td>
                            7
                          </td>
                          <td>
                            Henry Tom
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            $ 150.00
                          </td>
                          <td>
                            June 16, 2015
                          </td>
                        </tr>
                      </tbody>
                    </table>
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
