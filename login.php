<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="myscript.js"></script>
	<!-- <script>
		$(document).ready(function(){
			$("#loginbtn").click(function(){ 
				var username = $('#username').val();
				var password = $('#password').val();
				
				if( username == "" || password == "")
					$("#ack").html("Hello World");
				else
				$("#loginform").submit();
			});
		});
	</script> -->
	
</head>
<body>
     <form id="loginform" action="login-check.php" method="post">
     	<h2>LOGIN</h2>
		<div id="ack1"></div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" id="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" id="password" placeholder="Password"><br>
		
		<label for="category">Category</label>
     	<select name="category" id="category">
			<option >Select Category</option>
			<option value="1">Coach</option>
			<option value="1">Coach</option>
			<option value="2">Athlete</option>
			<option value="3">Manager</option></select><br>

     	<button id="loginbtn">Login</button>
     </form>
	 
	<!-- <script>
		$(document).ready(function () {
			$("#loginbtn").click( function() {
				if( $("#uname").val() == "" || $("#password").val() == "" )
					$("#ack1").html("Hello World");
				else
					$("loginform").submit(function () {
						var formData = {
						  uname: $("#uname").val(),
						  password: $("#password").val(),
						};

						$.ajax({
							type: "POST",
							url: "login-check.php",
							data: formData,
							dataType: "json",
							encode: true,
							success: function(data) {
								$("#ack1").html(data);
							},
						})
						
					});
				//return false;
			});
		});
	</script> -->
</body>
</html>
