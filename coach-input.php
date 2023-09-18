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
    <title>Hockey Training</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
	

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
		
		$(document).ready(function() {
			
			$('#team').change(function(){
				var team_id = $(this).val();
				$.ajax({
					
				});
			});
				
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
					url: "coach-input-check.php",
					data: $('#analysisform').serialize(),
					dataType: "text",
					success: function (response) {
						$('#result').text(response);
					}
				})
				clearInput();
				
			});
			
			$("#clearbtn").click(function(e) {
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
			<?php include ('coach-1sidebar.php');?>
			<!-- Page content wrapper-->
			<div id="page-content-wrapper">
				<!-- Top navigation-->
				<?php include ('coach-1topnavigate.php');?>
                <!-- Page content-->
		<div class="main-panel">
		<div class="d-inline-flex p-2"><h2>Training Analytics</h2></div>
        <div class="content-wrapper">
          <div class="col-6 grid-margin stretch-card">
              <div class="card">
               <div class="card-body">
					<h4 class="card-title">Hockey Training</h4>
					<!-- <p class="card-description">
                    Athlete's input
                  </p> -->
				  <span id="result"></span>
                  <form class="forms-sample" id="analysisform" method="post">
                    <!--<div class="form-group">
                      <label for="exampleInputName1" class="d-inline-flex p-2">Team</label>
					  <select class="form-select" id="team" name="team" placeholder="Enter Name" >
						
					  </select>
                    </div> -->
					<div class="form-group">
                      <label for="exampleInputName1" class="d-inline-flex p-2">Name</label>
					  <select class="form-select" id="input_selectname" name="input_selectname" placeholder="Enter Name" >
						<?php
							while ($rows = mysqli_fetch_assoc($result)){
								
								$getname = $rows['name'];
								echo "<option value='$getname'>$getname</option>";
							}
						?>
					  </select>
                    </div>
                    <div class="form-group">
						<label class="d-inline-flex p-2">Date</label>
							<input type="date" class="form-control" id="input_selectdate" name="input_selectdate" placeholder="Enter new activity"><br>
                    </div>
                    
                    <!-- <label><h4>Off field</h4></label><br>
					<label class="d-inline-flex p-2">Enter activity</label>
						<select class="form-select" name="off_activity" id="select_activity1">
							<option value=1>Lecture</option>
							<option value=2>Discussion</option>
							<option value=3>Sleep</option>
							<option value=999>Other</option></select><br>
							<input type="text" name="off_activity" class="form-control" id="input_activity1_other" placeholder="Enter new Activity" style='display:none;'/><br>
                    </div> -->
                    <div class="form-group">
                    <label for="appt" class="d-inline-flex p-2">Select a time</label> <br>
						<input type="time" id="time_start" name="time_start"> to
						<input type="time" id="time_end" name="time_end">
                        </select>
					</div>
                
                    
					<!-- <label><h4>On field</h4></label><br> -->
                    <div class="form-group">
						<label class="d-inline-flex p-2">Enter activity</label>
						<select name="on_activity" class="form-select" id="select_activity2">
							<option value='Hit Ball'>Hit Ball</option>
							<option value='Run'>Run</option>
							<option value='Jump'>Jump</option>
							<option value=999>Other</option></select><br>
						<!-- <input type="text" name="on_activity" id="input_activity2_other" placeholder="Enter new Activity" style='display:none;'/><br> -->
                    </div>
                    <div class="form-group">
                    <label class="d-inline-flex p-2">How many times?</label>
						<input type="text" class="form-control" id="sport_act" name= "sport_act" placeholder="Enter how many times"><br>
                    </div>
					
                    <button type="submit" class="btn btn-primary mr-2" id="analysisbtn">Submit</button>
                    <button class="btn btn-light" id="cancelbtn">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
		
</body>
</html>