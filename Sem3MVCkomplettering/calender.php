<?php
session_start();
$_SESSION['page']="calender.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Calender tasty recepies</title>

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
            <li role="presentation" class="active"><a href="#" >Calender</a></li>
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
        <h1>September</h1>
            <div class="calender">
                <ul class="daynames">
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                    <li>Saturday</li>
                    <li>Sunday</li>
                </ul>
                
                    <div class="day">
                        <div class= "margin-days-3">
                            <div class="clear">
                                <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li>1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear">
                            <ul>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9<a href="meatballs.php"><img src="pics/meatballs.jpg" alt="Bild på köttbullar" style="float:right;width:10vw;height:10vh;"></a></li>
                            <li>10</li>
                            <li>11</li>
                            </ul>
                        </div>
                        <div class="clear">
                            <ul>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16<a href="pancakes.php"><img src="pics/pancakes.jpg" alt="Bild på pannkakor" style="float:right;width:10vw;height:10vh;"></a></li>
                            <li>17</li>
                            <li>18</li>
                            </ul>
                        </div>
                        <div class="clear">
                            <ul>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            </ul>
                        </div>
                        <ul>
                        <li>26</li>
                        <li>27</li>
                        <li>28</li>
                        <li>29</li>
                        <li>30</li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    
            </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>