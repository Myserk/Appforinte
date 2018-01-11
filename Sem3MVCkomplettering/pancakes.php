<?php
session_start();
$_SESSION['page']="pancakes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pancakes</title>

    <!-- Bootstrap -->
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-default">
        <ul class="nav nav-tabs">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation" class="active"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
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
        <h1>Our best pancakes</h1>
        <div class ="rec-left">
            <h2>Ingredients</h2>
            <ul>
                <li>Pan</li>
                <li>Cakes</li>
                <li>Butter</li>
            </ul>
            <h2>Directions</h2>
                <p>Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each pancake. Brown on both sides and serve hot.</p>
            <h2>Nutrition values</h2>
            <ul>
                <li>Total Fat 10g</li>
                <li>Saturated Fat 24g</li>
                <li>Polyunsaturated Fat 13g</li>   
                <li>Monounsaturated Fat 1.57g</li>    
                <li>Cholesterol 21mg    </li>
                <li>Sugars 0.42g     </li>
                <li>Protein 3.47g</li>
            </ul>
        </div>
        <div class="recipepic">
            <img src="pics/pancakes.jpg" alt="Picture of pancakes" style="width:45vw;
    height:80vh;">
        </div>
        <div class="rec-left">
            <h2>Comments</h2>
            <ul class="comments">
            <?php
                include 'classes/Controller/Controller.php';
                $controller = new Controller();
                $com = $controller->getComments($_SESSION['page']);
                while ($row = $com->fetch_array(MYSQLI_ASSOC)) {
                    $content = $row['content'];
                    $timestamp = $row['timestamp'];
                    $username = $row['username'];
                    if(!isset($_SESSION['username']))
                        echo "<li>". htmlspecialchars($content) ."<p>By " . htmlspecialchars($row['username']) ." @" .$timestamp ."</li>";
                    else if (strtolower(htmlspecialchars($_SESSION['username']) == strtolower(htmlspecialchars($row['username'])))){
                        echo "<li>". htmlspecialchars($content) ."<p>By " . htmlspecialchars($row['username']) ." @" .$timestamp. 
                        '</br><form action="" method="post">
                        <input id="hidden" name="time" type="hidden" value="'. $timestamp . '">
                        <input name="delete" type="submit" value=" Delete ">
                        </p></li>';
                    }
                    else{
                        echo "<li>". htmlspecialchars($content) ."<p>By " . htmlspecialchars($row['username']) ." @" .$timestamp ."</li>";
                    }
            }
                if (isset($_SESSION['username'])) {
                    echo '<div class="wcomments">
                        <form action="../Controller/Controller.php" method="post">
                        <input id="comment" name="comment" placeholder="Write comment here" type="text">
                        <input name="commentsubmit" type="submit" value="Comment">
                    </div>';
                }
                if(isset($_POST['delete'])){
                            $controller->deleteComment($_POST['time']);
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