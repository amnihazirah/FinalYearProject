<?php
	
	$connect = mysqli_connect("localhost", "root", "", "test_db");
	
	$output = "";
	
	if (isset($_POST['search'])) {
		$input = $_POST['input'];
		
		if (!empty($input)) {
			$query = "SELECT * FROM users WHERE user_name LIKE '%$input%'";
			
			$res = mysqli_query($connect, $query);
			
			$output .= "
				<table class='table table-boardered table table-striped'>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Gender</th>
					</tr>
			";
			
			if (mysqli_num_rows($res) < 1) {
				$output .="
					<tr>
						<td colspan='6' class='text-center'>No data found</td>
				";
			}
			else{
				while ($row = mysqli_fetch_array($res)) {
					$output .="
						<tr>
							<td>".$row['user_name']."</td>
							<td>".$row['name']."</td>
							<td>".$row['email']."</td>
							<td>".$row['gender']."</td>
						</tr>
					";
				}
			}
		}
	}
	
?>

<?php include("header.php"); ?>
<?php include("navbar.php"); ?>

	
	<div class="main">
      <div class="main__container">
        <div class="main__content">
		<h3>Search Athletes</h3>
			
			<form method="post">
				<div class="row">
					<div>
						<input type="search" name="input" class="form-control" placeholder="Search">
					</div>
					<div>
						<input type="submit" name="search" class="btn btn-info" value="Search">
					</div>
				</div>
			</form>
			
			<?php
			echo $output
			?>
		</div>
      </div>
    </div>
</body>
</html>