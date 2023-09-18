<?php
	session_start();
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
    <title>Athlete's Details</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
	

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

<script>
		
		// $(document).ready(function() {
			// $("#select_activity1").change(function(){
				// if ($(this).val() == 999) {
					// $("#input_activity1_other").show();      
				// } else {
					// $("#input_activity1_other").hide();
				// }
			// });
			
			// $("#select_activity2").change(function(){
				// if ($(this).val() == 999) {
					// $("#input_activity2_other").show();      
				// } else {
					// $("#input_activity2_other").hide();
				// }
			// });
			
			$("#coach-signup-athlete-btn").click(function(e) {
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
					url: "signup-check.php",
					data: $('#coach-add-athlete').serialize(),
					dataType: "text",
					success: function (response) {
						$('#result').text(response);
					}
				})
				clearInput();
				
			});
	});
	
	function clearInput() {
	$("#coach-add-athlete :input").each( function() {
		$(this).val('');
	});
}
	</script>
	
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
		<div class="d-inline-flex p-2"><h2>Athlete's Details</h2></div>
        <div class="content-wrapper">
          <div class="col-6 grid-margin stretch-card">
              <div class="card">
               <div class="card-body">
					<h4 class="card-title">Enter New Athlete's Details</h4>
					<!-- <p class="card-description">
                    Athlete's input
                  </p> -->
				  <span id="result"></span>
                  <form class="forms-sample" id="coach-add-athlete" action="signup-check.php" method="post">
					<div id="ack"></div>
					<?php if (isset($_GET['error'])) { ?>
						<p class="error"><?php echo $_GET['error']; ?></p>
					<?php } ?>

					<?php if (isset($_GET['success'])) { ?>
						<p class="success"><?php echo $_GET['success']; ?></p>
					<?php } ?>
					
					<div class="form-group">
					<label class="d-inline-flex p-2">Name</label>
					<?php if (isset($_GET['name'])) { ?>
						<input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>" id="name" ><br>
					<?php }else{ ?>
						<input class="form-control" type="text" name="name" placeholder="Name" id="name" ><br>
					<?php }?>
					</div>
					
					<div class="form-group">
					<label class="d-inline-flex p-2" >E-mail</label>
					<?php if (isset($_GET['email'])) { ?>
						<input class="form-control" type="text" 
								name="email" 
								placeholder="Email"
								value="<?php echo $_GET['email']; ?>"
								id="email" ><br>
					<?php }else{ ?>
						<input class="form-control" type="text" 
							name="email" 
								placeholder="Email"
								id="email"><br>
					<?php }?>
					</div>
					
					<div class="form-group">
					<label class="d-inline-flex p-2">Gender</label>
							<div class="form-check">
							<input type="radio" class="form-check-input" for="flexRadioDefault2" placeholder= "Gender" name="gender" id="Gender" value="1">
							<label class="form-check-label">Male </label>
							</div>
							<div class="form-check">
							<input type="radio" class="form-check-input" for="flexRadioDefault2" placeholder= "Gender" name="gender" id="Gender" value="2">
							<label class="form-check-label">Female </label>
							</div>
					</div>
					
					<div class="form-group">
					<label class="d-inline-flex p-2" >Username</label>
					<?php if (isset($_GET['uname'])) { ?>
						<input class="form-control" type="text" 
								name="uname" 
								placeholder="Username"
								value="<?php echo $_GET['uname']; ?>"
								id="username" ><br>
					<?php }else{ ?>
						<input class="form-control" type="text" 
							name="uname" 
								placeholder="Username"
								id="username"><br>
					<?php }?>
					</div>
					
					<div class="form-group">
					<label class="d-inline-flex p-2" >Password</label>
					<?php if (isset($_GET['password'])) { ?>
						<input class="form-control" type="text" 
								name="password" 
								placeholder="Password"
								value="<?php echo $_GET['password']; ?>"
								id="email" ><br>
					<?php }else{ ?>
						<input class="form-control" type="text" 
							name="password" 
								placeholder="password"
								id="email"><br>
					<?php }?>
					</div>
					
					
					<button type="submit" class="btn btn-primary mr-2" id="coach-signup-athlete-btn">Submit</button>

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