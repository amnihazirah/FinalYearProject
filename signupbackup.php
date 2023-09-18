<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="myscript1.js?v=<?php echo microtime();?>"></script>
	<script src="//cdn.rawgit.com/placemarker/jQuery-MD5/master/jquery.md5.js"></script>
	 <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<link href="css/styles.css" rel="stylesheet" />
	<!-- <script>
	$(document).ready(function(){
		$("#signupbtn").click( function() {
		  if( $("#username").val() == "" || $("#password").val() == "" )
			$("#ack").html("Hello World");
		  else
			$.post( $("#MyForm").attr("action"),
					$("#MyForm :input").serializeArray(),
					function(data) {
					$("#ack").html(data);
					}
			);
		 
		$("#MyForm").submit( function() {
			return false;
		});
		});
	});
	</script> -->
</head>
<body>
	<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" >
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
     <form class="pt-6" id="MyForm" action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
		<div id="ack"></div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="alert alert-danger" role="alert"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="alert alert-success" role="alert"><?php echo $_GET['success']; ?></p>
        <?php } ?>
		  
		<label>E-mail</label>
        <?php if (isset($_GET['email'])) { ?>
            <input class="form-control form-control-lg" type="text" 
                    name="email" 
                    placeholder="Email"
                    value="<?php echo $_GET['email']; ?>"
					id="email" ><br>
        <?php }else{ ?>
            <input class="form-control form-control-lg" type="text" 
                name="email" 
                    placeholder="Email"
					id="email"><br>
        <?php }?>

        <label>Name</label>
        <?php if (isset($_GET['name'])) { ?>
            <input class="form-control form-control-lg" type="text" 
                    name="name" 
                    placeholder="Name"
                    value="<?php echo $_GET['name']; ?>"
					id="name" ><br>
        <?php }else{ ?>
            <input class="form-control form-control-lg" type="text" 
                    name="name" 
                    placeholder="Name"
					id="name" ><br>
        <?php }?>
		
		
		<label>Gender</label>
		<div class= 'my-2'><div class="form-check">
		  <input class="form-check-input" type="radio" placeholder= "Gender" name="gender" id="Gender" value="1">
		  <label class="form-check-label" for="flexRadioDefault1">
			Male
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" placeholder= "Gender" name="gender" id="Gender" value="2">
		  <label class="form-check-label" for="flexRadioDefault2">
			Female
		  </label>
		</div></div>


        <label>User Name</label>
        <?php if (isset($_GET['uname'])) { ?>
            <input class="form-control form-control-lg" type="text" 
                    name="uname" 
                    placeholder="User Name"
                    value="<?php echo $_GET['uname']; ?>"
					id="username"><br>
        <?php }else{ ?>
            <input class="form-control form-control-lg" type="text" 
                      name="uname" 
                      placeholder="User Name"
					  id="username"><br>
          <?php }?>


     	<label>Password</label>
			<input class="form-control form-control-lg" type="password" 
                name="password" 
                placeholder="Password"
				id="pass"
				><br>

        <label>Re Password</label>
        <input class="form-control form-control-lg" type="password" 
                name="re_password" 
                placeholder="Re_Password"
				id="re_password"
				><br>
				 
		<label for="category">Category</label>
		<select class="form-select" name="category" id="category">
			<option value="1">Coach</option>
			<option value="2">Athlete</option>
			<option value="3">Manager</option></select><br>
		

     	<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="signupbtn">Sign Up</button>
			<a href="loginbackup.php" class="ca">Already have an account?</a>
    </form>
	 
	</div>
    </div>
        </div>
      </div>
    </div>

  </div>
	
	<script>
		$(document).ready(function () {
			$("#signupbtn").click( function() {
				
				if( $("#username").val() == "" || $("#password").val() == "" )
					$("#ack").html("Hello World");
				else
					$("MyForm").submit(function () {
						var password = $.MD5("#password");

						$.ajax({
							type: "POST",
							url: "signup-check.php",
							data: formData = {
								name: $("#name").val(),
								password: $(password).val(),
							},
							dataType: "json",
							encode: true,
							success: function(data) {
								$("#ack").html(data);
							},
						})
					});
				//return false;
			});
		});
	</script>
	
</body>
</html>