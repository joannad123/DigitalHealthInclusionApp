<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cancer Menu</title>
    <link rel="stylesheet" href="style.css">
    <script src="previous.js"></script>
</head>
<body>
<h1>Please choose which category you would like to see recommended websites for.</h1>
<div class = "basicMenu">

    <p><input type ="button" value="Breast Cancer Support Pages" id="optionsBtn"
              onclick="window.location = 'breastCancerPages.php'"/></p>

    <p><input type ="button" value="Usability Chart" id="optionsBtn"
              onclick="window.location = 'usability.php'"/></p>

    <p><input type="button" value="Previous" onclick="goBack()"></p>

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