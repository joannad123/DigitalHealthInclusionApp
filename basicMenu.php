<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Please choose which feature you would like to explore first.</h1>
<div class = "basicMenu">

        <p><input type ="button" value="Digital Skills Quizzes" id="optionsBtn"
                  onclick="window.location = 'quizzes.php'"/></p>

        <p><input type ="button" value="Digital Health Section" id="optionsBtn"
              onclick="window.location = 'digitalHealth.php'"/></p>

        <p><input type ="button" value="Cancer Section" id="optionsBtn"
              onclick="window.location = 'cancerSection.php'"/></p>

        <p><input type ="button" value="Pharmacy Section" id="optionsBtn"
              onclick="window.location = 'pharmacySection.php'"/></p>

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