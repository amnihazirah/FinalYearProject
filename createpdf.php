<?php
	session_start();
	include ('db_conn.php');
	$query = "SELECT name FROM users where user_type=2";
	$result = mysqli_query($conn, $query);
	
	$queryteam = "SELECT team_name FROM team";
	$result_team = mysqli_query($conn, $queryteam);
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
			$("#analysisbtn").click(function(e) {
				e.preventDefault();
							
				$.ajax({
					method: "post",
					url: "create-pdf.php",
					data: $('#analysisform').serialize(),
					dataType: "text",
					success: function (response) {
						$('#result').text(response);
					}
				})
				clearInput();
				
			});
	});
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
		<div class="d-inline-flex p-2"><h2>Generate PDF</h2></div>
        <div class="content-wrapper">
			<div class="d-inline-flex p-2"><h2>Select an Athlete</h2></div>
			<form class="forms-sample" id="analysisform" method="post">
			<div class='col-6 grid-margin stretch-card m-4'>
				<select class="form-select" id="input_selectname" name="namepdf" placeholder="Enter Name" >
						<?php
							while ($rows = mysqli_fetch_assoc($result)){
								
								$getname = $rows['name'];
								//$userID = $rows['id'];
								echo "<option value='$getname'>$getname</option>";
							}
						?>
				</select>
			</div>
			<div class='mx-4'>
			<a class="btn btn-primary mr-2" id="pdfbutton" href="create-pdf.php">Generate PDF</a>
			</div>
			</form>
		</div>
      </div>
	</div>	
</body>
</html>