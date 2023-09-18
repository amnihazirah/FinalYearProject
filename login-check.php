<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['category'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$user_type = $_POST['category'];

	if (empty($uname)) {
		header("Location: loginbackup.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: loginbackup.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass' AND user_type='$user_type'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass && $row['user_type'] === $user_type) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				$_SESSION['user_type'] = $row['user_type'];
				
				if($row['user_type']==1){
					header("Location: coach-home.php");
				}
				if($row['user_type']==2){
					header("Location: athlete-home.php");
				}
				else{
					header("Location: coach-home.php");
				}
		        exit();
            }
			else{
				header("Location: loginbackup.php?error=Incorect User name or password");
		        exit();
			}
		}
		else{
			header("Location: loginbackup.php?error=Incorect User name or password");
	        exit();
		}
	}

}
else{
	header("Location: login.php");
	exit();
}
?>