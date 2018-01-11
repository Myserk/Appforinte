<?php
session_start();
$_SESSION['page']="index.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tasty Recipes</title>

    <!-- Bootstrap -->
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <nav class="navbar navbar-default">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">Home</a></li>
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
                    echo '<li role="presentation"><a href="register.php" >Register</a></li>';
                }
            
            ?>
        </ul>
    </nav>
    <div class="banner"><img src="pics/fpbanner.jpg" alt="Banner on food"></div>
    <div class="fpcontent">
        <div class="textbox">
            <h1>Tasty recepies</h1>
            <p>Our newest and best recepies of all time! Join us and make food great again. A full course doesn't have to feel like a wall. </p>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
