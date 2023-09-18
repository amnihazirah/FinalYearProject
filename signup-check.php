<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$gender = validate($_POST['gender']);
	$user_type = validate($_POST['category']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signupbackup.php?error=User Name is required&$user_data");
	    exit();
	}
	else if(empty($pass)){
        header("Location: signupbackup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signupbackup.php?error=Re Password is required&$user_data");
	    exit();
	}

	if(empty($name)){
        header("Location: signupbackup.php?error=Name is required&$user_data");
	    exit();
	}
	
	else if(empty($gender)){
        header("Location: signupbackup.php?error=Gender is required&$user_data");
	    exit();
	}
	
	else if(empty($email)){
        header("Location: signupbackup.php?error=Email is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signupbackup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        //$pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signupbackup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name, email, gender, user_type) VALUES('$uname', '$pass', '$name', '$email', '$gender', '$user_type')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signupbackup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signupbackup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signupbackup.php");
	exit();
}