<html>
<head>
	<title>ATHLETE</title>
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
	<!-- Main Content -->
    <!-- <div class="main">
      <div class="main__container">
        <div class="main__content">
		<h1 class="page_header">Field Hockey Performance Analysis for Athlete</h1>
		<h1>Enter Daily Analysis<h1>
		<button><a href="input.php">Enter Here</a><button>
		
      </div>
    </div> -->
	
	<div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">FYP PROJECT</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="athletehome.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="showlist.php">Athlete</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="overviewexample.php">Overview</a>
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
                                        <a class="dropdown-item" href="profile">Profile</a>
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
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Teams</h4>
                  <p class="card-description">
                    Team Names
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <!-- <th>
                            First name
                          </th>
                           -->
                          <th>
                            Team
                          </th>
						  <th>
                            Overall Condition
                          </th>
                          <th>
                            Select
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <!-- <td>
                            Herman Beck
                          </td>
                           -->
                          <td>
                            January
                          </td>
						  <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <button type="submit" class="btn btn-primary mr-2">Select</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <!--<td>
                            Messsy Adam
                          </td>
                           -->
                          <td>
                            February
                          </td>
						  <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <button type="submit" class="btn btn-primary mr-2">Select</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <!-- <td>
                            John Richards
                          </td>
                           -->
                          <td>
                            March
                          </td>
						  <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <button type="submit" class="btn btn-primary mr-2">Select</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <!-- <td>
                            Peter Meggik
                          </td>
                           -->
                          <td>
                            April
                          </td>
						  <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <button type="submit" class="btn btn-primary mr-2">Select</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <!-- <td>
                            Edward
                          </td>
                          
                             -->
                          <td>
                            May
                          </td>
						  <td>
						  <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <button type="submit" class="btn btn-primary mr-2">Select</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <!-- <td>
                            John Doe
                          </td>
                           -->
                          <td>
                            June
                          </td>
						  <td>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <button type="submit" class="btn btn-primary mr-2">Select</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            7
                          </td>
                          <!-- <td>
                            Henry Tom
                          </td>
                          -->
                          <td>
                            July
                          </td>
						  <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td> 
                          <td>
                            <button type="submit" class="btn btn-primary mr-2">Select</button>
                          </td>
                        </tr>
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

    <script src="app.js"></script>
	<script src="myscript.js"></script>
  </body>
</html>
