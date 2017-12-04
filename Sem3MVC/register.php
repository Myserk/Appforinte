<?php
	
?>
<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>Join Tasty recipes!</title>

	    <!-- Bootstrap -->
	    <link href="css/reset.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-default">
	        <ul class="nav nav-tabs">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Recepies <span class="caret"></span>
    </a>

                <ul class="dropdown-menu">            
                    <li><a href="meatballs.php">Meatballs</a></li>
                    <li><a href="pancakes.php">Pancakes</a></li>
                </ul>

            </li>
	            <li role="presentation"><a href="calender.php">Calender</a></li>
	            <?php
	                if (isset($_SESSION['username'])) {
	                    echo '<li role="presentation"><a href="signout.php" >Sign out</a></li>';

	                }
	                else{
	                    echo '<li role="presentation"><a href="loginform.php" >Sign in</a></li>';
	                    echo '<li role="presentation"class="active"><a href="#" >Register</a></li>';
	                }
	            
	            ?>
	        </ul>
    	</nav>
		<div class="loginwindow">
			<h2>Sign up!</h2>
			<form action="" method="post">
			<label>Username</label>
			<input id="signup" name="username" placeholder="write name here" type="text">
			<label>Password</label>
			<input id="signup" name="password" placeholder="*******" type="password">
			<input name="signup" type="submit" value="Sign up!">
			<br>
		<?php
			if(isset($_POST['signup'])){
				include 'classes/Controller/Controller.php';
				$controller = new Controller();
				$controller->registerUser($_POST['username'],$_POST['password']);
			}
		?>
		</div>
	</body>
</html>
