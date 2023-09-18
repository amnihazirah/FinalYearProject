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
                                <li class="nav-item"><a class="nav-link" href="searchexample.php">Search</a></li>
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

<?php
	
	$connect = mysqli_connect("localhost", "root", "", "test_db");
	
	$output = "";
	
	if (isset($_POST['search'])) {
		$input = $_POST['input'];
		
		if (!empty($input)) {
			$query = "SELECT * FROM users WHERE user_name LIKE '%$input%'";
			
			$res = mysqli_query($connect, $query);
			
			$output .= "
				<table class='table table-boardered table table-striped'>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Gender</th>
					</tr>
			";
			
			if (mysqli_num_rows($res) < 1) {
				$output .="
					<tr>
						<td colspan='6' class='text-center'>No data found</td>
				";
			}
			else{
				while ($row = mysqli_fetch_array($res)) {
					$output .="
						<tr>
							<td>".$row['user_name']."</td>
							<td>".$row['name']."</td>
							<td>".$row['email']."</td>
							<td>".$row['gender']."</td>
						</tr>
					";
				}
			}
		}
	}
	
?>

                <!-- Page content-->
                <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
				<div class="card">
					<h3>Search Athletes</h3>
			
					<form method="post">
						<div class="row">
							<div>
								<input type="search" name="input" class="form-control" placeholder="Search">
							</div>
							<div>
								<input type="submit" name="search" class="btn btn-info" value="Search">
							</div>
						</div>
					</form>
					
					<?php
					echo $output
					?>
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
