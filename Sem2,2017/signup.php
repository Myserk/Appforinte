<?php
	session_start();
	$error = "";
	if (isset($_POST['signup'])) {
		$connection = mysqli_connect("localhost", "Rex", "123");
		$db = mysqli_select_db($connection,"tastystuff");
		$username = $_POST['username'];
		$query = mysqli_query($connection,"select * from users where username='$username'");
		if ($query->num_rows == 1) {
				$error = "Username is in use";
		}
		else{

			$username = $_POST['username'];
			$password = $_POST['password'];
			mysqli_query($connection,"insert into users (username,password) values('$username','$password')");
			mysqli_close($connection);
			header("location: ". $_SESSION['page']);
		}


	}
?>