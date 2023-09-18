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
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">FYP Project</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
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
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
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
								Amni Hazirah
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 col-md-2 col-5 ">
								<label style="font-weight:bold;">Gender</label>
							</div>
							<div class="col-md-8 col-6">
								<?php echo $row['gender'];?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 col-md-2 col-5">
								<label style="font-weight:bold;">DOB</label>
							</div>
							<div class="col-md-8 col-6">
								09-11-1999
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 col-md-2 col-5">
								<label style="font-weight:bold;">Address</label>
							</div>
							<div class="col-md-8 col-6">
								Taman Bukit Saga Shah Alam Selangor
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 col-md-2 col-5">
								<label style="font-weight:bold;">E-mail</label>
							</div>
							<div class="col-md-8 col-6">
								ammnihazirah@gmail.com
							</div>
						</div>
						</div>
					</div>
				<div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
