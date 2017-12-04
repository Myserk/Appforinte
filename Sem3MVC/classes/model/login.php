
<?php
	class login{
		public function loginUser($username,$password){
				// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			$connection = mysqli_connect("localhost", "Rex", "123");
			$username = stripslashes($username);
			$username = mysqli_real_escape_string($connection,$username);
			$password = stripslashes($password);
			$password = mysqli_real_escape_string($connection,$password);
			$db = mysqli_select_db($connection,"tastystuff");
			$query = mysqli_query($connection,"select * from users where password='$password' AND username='$username'");

			if ($query->num_rows == 1) {
				$_SESSION['username']=htmlspecialchars($username); // Initializing Session
				header("location:index.php");
			}
			else{
				echo "Username or Password is invalid";
			}
			mysqli_close($connection); // Closing Connection
		}
		public function registerUser($username,$password){

			$connection = mysqli_connect("localhost", "Rex", "123");
			$db = mysqli_select_db($connection,"tastystuff");
			$password = stripslashes($password);
			$password = mysqli_real_escape_string($connection,$password);
			$username = stripslashes($username);
			$username = mysqli_real_escape_string($connection,$username);
			$query = mysqli_query($connection,"select * from users where username='$username'");
			if ($query->num_rows == 1) {
					echo "Username is in use";
			}
			else{
				mysqli_query($connection,"insert into users (username,password) values('$username','$password')");
				mysqli_close($connection);
				header("location:index.php");
			}

		}
	}

?>
