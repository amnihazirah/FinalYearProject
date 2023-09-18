<?php
	include("db_conn.php");
	
	if (isset($_POST['o']))
	{
		if ($_POST['o'] == "athlist")
		{
			$json = array();
			$rs = mysqli_query($conn, "SELECT id, name, gender FROM users ORDER BY name ASC");
			while ($r = mysqli_fetch_row($rs))
				$json[] = array($r[0], ucwords($r[1]), ucwords($r[2]));
			
			echo json_encode($json);
		}
		else if ($_POST['o'] == "athprofile")
		{
			$rs = mysqli_query($conn, "SELECT name, dob, gender, address FROM users WHERE id='" . $_POST['pid'] . "'");
			$r = mysqli_fetch_row($rs);
			
			for ($i = 0; $i < count($r); $i++)
				$r[$i] = ucwords($r[$i]);
			
			echo json_encode($r);
		}
		
	}
?>