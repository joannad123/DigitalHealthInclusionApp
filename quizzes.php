<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Please choose which quiz you would like to try first.</h1>
<div class = "quizMenu">

    <p><input type ="button" value="Login Quiz" id="optionsBtn"
              onclick="window.location = 'loginQuiz.php'"/></p>

    <p><input type ="button" value="Internet Safety Quiz" id="optionsBtn"
              onclick="window.location = 'safetyQuiz.php'"/></p>

    <p><input type ="button" value="App Quiz" id="optionsBtn"
              onclick="window.location = 'appQuiz.php'"/></p>

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