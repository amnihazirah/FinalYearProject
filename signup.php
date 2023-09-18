<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="myscript1.js?v=<?php echo microtime();?>"></script>
	<script src="//cdn.rawgit.com/placemarker/jQuery-MD5/master/jquery.md5.js"></script>

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
	
     <form id="MyForm" action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
		<div id="ack"></div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
		  
		<label>E-mail</label>
        <?php if (isset($_GET['email'])) { ?>
            <input type="text" 
                    name="email" 
                    placeholder="Email"
                    value="<?php echo $_GET['email']; ?>"
					id="email" ><br>
        <?php }else{ ?>
            <input type="text" 
                name="email" 
                    placeholder="Email"
					id="email"><br>
        <?php }?>

        <label>Name</label>
        <?php if (isset($_GET['name'])) { ?>
            <input type="text" 
                    name="name" 
                    placeholder="Name"
                    value="<?php echo $_GET['name']; ?>"
					id="name" ><br>
        <?php }else{ ?>
            <input type="text" 
                    name="name" 
                    placeholder="Name"
					id="name" ><br>
        <?php }?>
		  
		<label>Gender</label>
        <?php if (isset($_GET['name'])) { ?>
				<input type="radio" placeholder= "Gender" name="gender" id="Gender" value="1">Male
				
				<input type="radio" placeholder= "Gender" name="gender" id="Gender" value="2">Female<br>
				  
        <?php }else{ ?>
				<input type="radio" 
                    name="gender" 
                    placeholder="Gender"
					value="1"
					id="Gender" >Male
				<input type="radio" 
					name="gender" 
					placeholder="Gender"
					value="2"
					id="Gender">Female<br>
        <?php }?>

        <label>User Name</label>
        <?php if (isset($_GET['uname'])) { ?>
            <input type="text" 
                    name="uname" 
                    placeholder="User Name"
                    value="<?php echo $_GET['uname']; ?>"
					id="username"><br>
        <?php }else{ ?>
            <input type="text" 
                      name="uname" 
                      placeholder="User Name"
					  id="username"><br>
          <?php }?>


     	<label>Password</label>
			<input type="password" 
                name="password" 
                placeholder="Password"
				id="pass"
				><br>

        <label>Re Password</label>
        <input type="password" 
                name="re_password" 
                placeholder="Re_Password"
				id="re_password"
				><br>
				 
		<label for="category">Category</label>
		<select name="category" id="category">
			<option value="1">Coach</option>
			<option value="2">Athlete</option>
			<option value="3">Manager</option></select><br>
		

     	<button id="signupbtn">Sign Up</button>
			<a href="login.php" class="ca">Already have an account?</a>
    </form>
	  
	
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