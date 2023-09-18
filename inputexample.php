<?php
	include ('db_conn.php');
	$query = "SELECT name FROM user";
	$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Input</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
	

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

<script>
		
		$(document).ready(function() {
			$("#select_activity1").change(function(){
				if ($(this).val() == 999) {
					$("#input_activity1_other").show();      
				} else {
					$("#input_activity1_other").hide();
				}
			});
			
			$("#select_activity2").change(function(){
				if ($(this).val() == 999) {
					$("#input_activity2_other").show();      
				} else {
					$("#input_activity2_other").hide();
				}
			});
			
			$("#analysisbtn").click(function(e) {
				e.preventDefault();
				
				// var formcheck = "<form id='analysisform' action='input-check.php' method='post'>";
				// formcheck += "<input type='hidden' name='input_selectname' value='" + $("#input_selectname").val() + "'>";
				// formcheck += "<input type='hidden' name='input_selectdate' value='" + $("#input_selectdate").val() + "'>";
				// formcheck += "<input type='hidden' name='off_activity' value='" + $("#select_activity1").val() + "'>";
				// formcheck += "<input type='hidden' name='off_activity_other' value='" + $("#input_activity1_other").val() + "'>";
				// formcheck += "<input type='hidden' name='hb_rate' value='" + $("#hb_rate").val() + "'>";
				// formcheck += "<input type='hidden' name='on_activity' value='" + $("#select_activity2").val() + "'>";
				// formcheck += "<input type='hidden' name='on_activity_other' value='" + $("#input_activity2_other").val() + "'>";
				// formcheck += "<input type='hidden' name= 'sport_act' value='" + $("#sport_act").val() + "'>";
				// formcheck += "<button id='analysisbtn'>Submit</button>";
				// formcheck += "</form>";
				
				// $("body").append(formcheck);
				// $("#analysisform").submit();
				// $("#analysisform").remove();
				
				$.ajax({
					method: "post",
					url: "inputexample-check.php",
					data: $('#analysisform').serialize(),
					dataType: "text",
					success: function (response) {
						$('#result').text(response);
					}
				})
				clearInput();
				
			});
	});
	
	function clearInput() {
	$("#analysisform :input").each( function() {
		$(this).val('');
	});
}
	</script>
	
</head>
<body>
	
	<div class="d-flex" id="wrapper">
		<!-- Sidebar-->
			<div class="border-end bg-white" id="sidebar-wrapper">
				<div class="sidebar-heading border-bottom bg-light">FYP PROJECT</div>
					<div class="list-group list-group-flush">
						<a class="list-group-item list-group-item-action list-group-item-light p-3" href="athletehome.php">Dashboard</a>
						<a class="list-group-item list-group-item-action list-group-item-light p-3" href="listexample.php">Athlete</a>
						<a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
						<a class="list-group-item list-group-item-action list-group-item-light p-3" href="input.php">Input</a>
						<a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
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
                                <li class="nav-item active"><a class="nav-link" href="athletehome.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="listexample.php">Athletes</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Name</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Profile</a>
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
		<div class="d-inline-flex p-2"><h2>Psychology Management</h2></div>
        <div class="content-wrapper">
          <div class="col-6 grid-margin stretch-card">
              <div class="card">
               <div class="card-body">
					<h4 class="card-title">Athlete Data</h4>
					<!-- <p class="card-description">
                    Athlete's input
                  </p> -->
				  <span id="result"></span>
                  <form class="forms-sample" id="analysisform" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1" class="d-inline-flex p-2">Name</label>
                      <input type="text" class="form-control" id="input_selectname" name="input_selectname" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
						<label class="d-inline-flex p-2">Date</label>
							<input type="date" class="form-control" id="input_selectdate" name="input_selectdate" placeholder="Enter new activity"><br>
                    </div>
                    <div class="form-group">
                    <label><h4>Off field</h4></label><br>
					<label class="d-inline-flex p-2">Enter activity</label>
						<select class="form-select" name="off_activity" id="select_activity1">
							<option value=1>Lecture</option>
							<option value=2>Discussion</option>
							<option value=3>Sleep</option>
							<option value=999>Other</option></select><br>
							<!--<input type="text" name="off_activity" class="form-control" id="input_activity1_other" placeholder="Enter new Activity" style='display:none;'/><br> -->
                    </div>
                    <div class="form-group">
                    <label for="appt" class="d-inline-flex p-2">Select a time</label> <br>
						<input type="time" id="time_start" name="time_start"> to
						<input type="time" id="time_end" name="time_end">
                        </select>
					</div>
                
                    <div class="form-group">
                      <label class="d-inline-flex p-2">Heartbeat</label>
						<input type="text" class="form-control" id="hb_rate" name= "hb_rate" placeholder="Enter how many times"><br>
                        </span>
                      </div>
                    <div class="form-group">
                    <label><h4>On field</h4></label><br>
						<label class="d-inline-flex p-2">Enter activity</label>
						<select name="on_activity" id="select_activity2">
							<option value=1>Hit Ball</option>
							<option value=2>Run</option>
							<option value=3>Jump</option>
							<option value=999>Other</option></select><br>
						<!-- <input type="text" name="on_activity" id="input_activity2_other" placeholder="Enter new Activity" style='display:none;'/><br>-->
                    </div>
                    <div class="form-group">
                    <label class="d-inline-flex p-2">How many times?</label>
						<input type="text" class="form-control" id="sport_act" name= "sport_act" placeholder="Enter how many times"><br>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" id="analysisbtn">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
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
		
</body>
</html>