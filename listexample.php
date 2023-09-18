<?php
include('db_conn.php');
$query="select * from users";
$result=mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LIST</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<script>
		function getAthleteList()
		{
			$.ajax({
				type: "POST",
				url: "showlist-check.php",
				data: "o=athlist"
			}).done(function(data){
				var res = $.parseJSON(data);
				var div_html = "";
				
				for (i = 0; i < res.length; i++)
				{
					div_html += '<div class="card-body" ext_id="' + res[i][0] + '">';
						div_html += '<button class="btn-view-athlete">View Athlete Profile</button>';
						div_html += '<h2 id="cardtitle" class="card-title">' + res[i][1] + '</h2>';
						div_html += '<p id="cardtext" class="card-text">' + res[i][2] + ' Athlete </p>';
						
					div_html += '</div>';
				}
				
				$("#div-athlete-list").html(div_html);
			});
		}
		
		function viewProfile(param)
		{
			var pTop = $("body").scrollTop();
			
			var popup_html = "";
			popup_html += "<div id='page-loading-blocker' style='opacity: 0.6; pointer-events:visible;z-index:1100;position:absolute; background-color:#000000; width:" + $(document).width() + "px;height:" + $(document).height() + "px;top:" + pTop + "px;left:0;'></div>";
			popup_html += "<div id='page-loading-frame' style='opacity: 1; background-color: #FFF; margin: 10rem auto; pointer-events:all;z-index:1100;text-align:left;position:absolute;width: 20rem; height: 30rem; left: 50%; margin-left: -10rem; top:" + pTop + "px;text-align:center'>";
			
			
			popup_html += '<div class="row" >';
				popup_html += '<div class="col-md=8 mt-1">';
					popup_html += '<div class="card mb-3 content">';
						popup_html += '<h1 class="m3 pt-3">Athlete Profile</h1>';
						popup_html += '<div class="card-body">';
							popup_html += '<div class="row">';
								popup_html += '<div class="col-md-3">';
									popup_html += '<h5>Full Name</h5>';
								popup_html += '</div>';
								popup_html += '<div class="col-md-9 text-secondary">';
									popup_html += param[0];
								popup_html += '</div>';
							popup_html += '</div>';
							popup_html += '<div class="row">';
								popup_html += '<div class="col-md-3">';
									popup_html += '<h5>Age</h5>';
								popup_html += '</div>';
								popup_html += '<div class="col-md-9 text-secondary">';
									popup_html += param[1];
								popup_html += '</div>';
							popup_html += '</div>';
							popup_html += '</hr>';
							popup_html += '<div class="row">';
								popup_html += '<div class="col-md-3">';
									popup_html += '<h5>Gender</h5>';
								popup_html += '</div>';
								popup_html += '<div class="col-md-9 text-secondary">';
									popup_html += param[2];
								popup_html += '</div>';
							popup_html += '</div>';
							popup_html += '<div class="row">';
								popup_html += '<div class="col-md-3">';
									popup_html += '<h5>Address</h5>';
								popup_html += '</div>';
								popup_html += '<div class="col-md-9 text-secondary">';
									popup_html += param[3];
								popup_html += '</div>';
							popup_html += '</div>';
						popup_html += '</div>';
					popup_html += '</div>';
				popup_html += '</div>';
			popup_html += '</div>';
			
			$("body").append(popup_html);
		}
		
		$(document).ready(function()
		{
			$(document).on("click", ".btn-view-athlete", function() {
				var pid = $(this).closest(".card-body").attr("ext_id");
				
				$.ajax({
					type: "POST",
					url: "showlist-check.php",
					data: "o=athprofile&pid=" + pid
				}).done(function(data){
					var res = $.parseJSON(data);
					
					viewProfile(res);
				});
			});
			
			$(document).on("click", "#page-loading-blocker", function() {
				$("#page-loading-frame").remove();	
				$("#page-loading-blocker").remove();
			});
			
			getAthleteList();
		});
	</script>
</head>

<body>


	<!-- Main Content -->
    <!-- <div class="main">
		<div class="main__container">
			<div class="main__content">
				<div class="row">
					<div id="div-athlete-list">
						
					</div>
				</div>
			</div>
		</div>
	</div> -->
	
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">FYP PROJECT</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="coachhome.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="showlist.php">Athlete</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="overview.php">Overview</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="input.php">Input</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="profile.php">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Print</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="coachhome.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="showlist.php">Athletes</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Name</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="profile.php">Profile</a>
                                        <a class="dropdown-item" href="#!">Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic Table 3</h4>
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
                            First name
                          </th>
                          <th>
                            Progress
                          </th>
                          <th>
                            Mood
                          </th>
                          <th>
                            Date
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="image"/>
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
                            Good
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
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            Good
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
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            Slightly Stressed
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
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            Very Stressed
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
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            Good
                          </td>
                          <td>
                            June 16, 2015
                          </td>
                        </tr> -->
						<?php
						   while($rows=mysqli_fetch_assoc($result))
							{
						?>
								<tr>
									<td><?php echo $rows['user_name']; ?></td>
									<td><?php echo $rows['name']; ?></td>
									<td><?php echo $rows['email']; ?></td>
									<td><?php echo $rows['gender']; ?></td>
									<td><?php echo $rows['id']; ?></td>
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

	
</body>
</html>