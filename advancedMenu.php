<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advanced Menu</title>
    <link rel="stylesheet" href="style.css">
    <script src="slideshow.js"></script>
</head>
<body>

<div id="navbar">
    <ul>
        <li>
            <div class="dropdown">
                <button class="dropbtn">Digital Skills Quizzes</button>
                <div class="dropdown-content">
                    <a href="loginQuiz.php">Login Quiz</a>
                    <a href="safetyQuiz.php">Internet Safety Quiz</a>
                    <a href="appQuiz.php">App Quiz</a>
                </div>
            </div></li>
        <li>
            <div class="dropdown">
                <button class="dropbtn">Cancer</button>
                <div class="dropdown-content">
                    <a href="logout.php">Recommended Sites</a>
                    <a href="logout.php">Category 2</a>
                    <a href="logout.php">Category 3</a>
                </div>
            </div></li>
        <li>
            <div class="dropdown">
                <button class="dropbtn">Pharmacy</button>
                <div class="dropdown-content">
                    <a href="logout.php">Recommended Sites</a>
                    <a href="logout.php">Category 2</a>
                    <a href="logout.php">Category 3</a>
                </div>
            </div></li>
            <li><div class="dropdown">
                <button class="dropbtn">Account</button>
                <div class="dropdown-content">
                    <a href="logout.php">Logout</a>
                </div></li>
            </div>
        </li>
    </ul>
</div>

<div class="slideshow-container">

    <div class="mySlides" style="display: block;">
        <img src="digihealth.jpg"/>
    </div>
    <div class="mySlides">
        <img src="digitalinc.png"/>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<?php

include("config.php");

session_start();

if(empty($_SESSION)) {
    header("Location: register.php");
}

$loggedInUser = $_SESSION['username'];


?>

</body>
</html>