<html>
<head>
	<title>Login</title>
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
 <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="margin: 150px">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>Sign in to continue</h4>
              <!-- <form class="pt-3" id="loginform" action="login-check.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="uname" name="uname" placeholder="Username">
                
				</div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                </div>
				<div class="form-group">
					<select class="form-control form-control-lg" name="category" id="category">
						<option value="0">Category</option>
						<option value="1">Coach</option>
						<option value="2">Athlete</option>
						<option value="3">Manager</option></select><br>
                </div>
                <div class="mt-3">
                  <a role="button" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="signup.php" class="text-primary">Create</a>
                </div>
              </form> -->
			  <form class="pt-3" id="loginform" action="login-check.php" method="post">
				<div id="ack1"></div>
				<?php if (isset($_GET['error'])) { ?>
					<p class="alert alert-danger" role="alert"><?php echo $_GET['error']; ?></p>
				<?php } ?>
				<div class="form-group">
				<input type="text" name="uname" class="form-control form-control-lg" id="uname" placeholder="User Name"><br>
				</div>
				<div class="form-group">
				<input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password"><br>
				</div>
				<div class="form-group">
				<select name="category" class="form-control form-control-lg" id="category">
					<option value="1">Coach</option>
					<option value="2">Athlete</option>
					</select><br>
				</div>
				<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="loginbtn">Login</button>
			 </form>
            </div>
          </div>
        </div>
      </div>
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
	</script>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</body>
</html>