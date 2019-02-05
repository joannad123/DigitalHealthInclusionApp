<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancer Menu</title>
    <link rel="stylesheet" href="style.css">
    <script src="previous.js"></script>
</head>
<body>
<form id="cancerchoice" name="cancerchoice" method="post">

<h1>Please choose which category you would like to see recommended websites for.</h1>
<div class = "basicMenu">

    <p><input type ="button" value="Breast Cancer Support Pages" id="optionsBtn"
              onclick="window.location = 'breastCancerPages.php'"/></p>

    <p><input type ="button" value="Lung Cancer Support Pages" id="optionsBtn"
              onclick="window.location = 'lungCancerPages.php'"/></p>

    <p><input type ="button" value="Usability Chart" id="optionsBtn"
              onclick="window.location = 'usability.php'"/></p>

    <p><input type="button" value="Previous" onclick="goBack()"></p>

    <p><input name="button" type="submit" value="Main Menu"></p>

    <p><input type ="button" value="Logout" id="logout"
              onclick="window.location = 'logout.php'"/></p>
</div>
</form>

<?php

include ("config.php");

session_start();

if(empty($_SESSION)) {
    header("Location: register.php");
}

$loggedInUser = $_SESSION['username'];

if (isset($_POST['button'])) {

    $sqlUsersScore = "SELECT score FROM `user_score` WHERE `username` = '$loggedInUser' AND `score` = '1'";
    $resultScore = $conn->query($sqlUsersScore);

    if ($resultScore->num_rows > 0) {
        //redirect to basic menu
        header("Location: basicMenu.php");
    } else {
        header("Location: advancedMenu.php");
    }
}

?>

</form>
</body>
</html>