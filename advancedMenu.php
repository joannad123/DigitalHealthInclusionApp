<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advanced Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="navbar">
    <ul>
        <li>
            <div class="dropdown">
                <button class="dropbtn">Digital Skills Quizzes</button>
                <div class="dropdown-content">
                    <a href="logout.php">Category 1</a>
                    <a href="logout.php">Category 2</a>
                    <a href="logout.php">Category 3</a>
                </div>
            </div></li>
        <li>
            <div class="dropdown">
                <button class="dropbtn">Cancer</button>
                <div class="dropdown-content">
                    <a href="logout.php">Category 1</a>
                    <a href="logout.php">Category 2</a>
                    <a href="logout.php">Category 3</a>
                </div>
            </div></li>
        <li>
            <div class="dropdown">
                <button class="dropbtn">Pharmacy</button>
                <div class="dropdown-content">
                    <a href="logout.php">Category 1</a>
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


<?php

include("config.php");

session_start();

$loggedInUser = $_SESSION['username'];


?>

</body>
</html>