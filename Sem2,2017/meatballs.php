<?php
session_start();
$_SESSION['page']="meatballs.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Meatballs</title>

    <!-- Bootstrap -->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-default">
        <ul class="nav nav-tabs">
            <li role="presentation">
                <a href="index.php">Home</a></li>
            <li role="presentation" class="active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
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
    <div class="recipe">
        <h1>Greatest meatballs of all time</h1>
        <div class ="rec-left">
            <h2>Ingredients</h2>
            <ul>
                <li>Meat</li>
                <li>Balls</li>
                <li>Pasta</li>
            </ul>
            <h2>Directions</h2>
            <p>Arrange the meatballs spaced slightly apart on a baking sheet. Cook under the broiler for 20 to 25 minutes or bake at 400°F for 25 to 30 minutes. (Watch closely if cooking meatballs made with lean meat.) The meatballs are done when cooked through and the outsides are browned, and when they register 165°F in the middle on an instant read thermometer. Serve immediately.</p>
            <h2>Nutrition values</h2>
            <ul>
                <li>Total Fat 3.69g</li>
                <li>Saturated Fat 1.394g</li>
                <li>Polyunsaturated Fat 0.163g</li>   
                <li>Monounsaturated Fat 1.57g</li>    
                <li>Cholesterol 21mg    </li>
                <li>Sodium 134mg    </li>
                <li>Potassium 60mg   </li>
                <li>Total Carbohydrate 2.12g    </li>
                <li>Dietary Fiber 0.1g  </li>
                <li>Sugars 0.42g     </li>
                <li>Protein 3.47g</li>
            </ul>
        </div>
        <div class="recipepic">
            <img src="pics/meatballs.jpg" alt="picture of meatballs" style="width:45vw;
    height:80vh;">
        </div>
        <div class="rec-left">

            <h2>Comments</h2> 
            <ul class="comments">
            <?php
                include('comments.php');
                if (isset($_SESSION['username'])) {
                include('writecomments.php');
                }
            ?>
            </ul>
        </div>
    </div>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>