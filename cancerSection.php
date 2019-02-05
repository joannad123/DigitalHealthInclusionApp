<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
    <script src="previous.js"></script>
</head>
<body>
<h1>Please choose which feature you would like to explore first.</h1>
<div class = "basicMenu">

    <p><input type ="button" value="Webpage Recommender" id="optionsBtn"
              onclick="window.location = 'cancerChoice.php'"/></p>


    <p><input type="button" value="Main Menu" onclick="location.href='basicMenu.php'"></p>

    <p><input type ="button" value="Logout" id="logout"
              onclick="window.location = 'logout.php'"/></p>
</div>

<?php

include ("config.php");

session_start();

if(empty($_SESSION)) {
    header("Location: register.php");
}

$loggedInUser = $_SESSION['username'];


?>

</form>
</body>
</html>