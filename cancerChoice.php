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
    <div class="basicMenu">

        <p><input name="button1" type="submit" value="Breast Cancer Support Pages" id="optionsBtn"/></p>

        <p><input name="button2" type="submit" value="Lung Cancer Support Pages" id="optionsBtn"/></p>

        <p><input type="button" value="Previous" onclick="goBack()"></p>

        <p><input name="button" type="submit" value="Main Menu"></p>

        <p><input type="button" value="Logout" id="logout"
                  onclick="window.location = 'logout.php'"/></p>
    </div>
</form>

<?php

include("config.php");

session_start();

if (empty($_SESSION)) {
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

if (isset($_POST['button1'])) {

    $sql = "SELECT usability FROM `user_score` WHERE `username` = '$loggedInUser' AND `usability` = '1'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: breastCGraphics.php");
    }

    $sql = "SELECT usability FROM `user_score` WHERE `username` = '$loggedInUser' AND `usability` = '2'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: breastCNavigation.php");
    }

    $sql = "SELECT usability FROM `user_score` WHERE `username` = '$loggedInUser' AND `usability` = '3'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: breastCStyles.php");
    }
}

if (isset($_POST['button2'])) {

    $sql = "SELECT usability FROM `user_score` WHERE `username` = '$loggedInUser' AND `usability` = '1'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: lungGraphics.php");
    }

    $sql = "SELECT usability FROM `user_score` WHERE `username` = '$loggedInUser' AND `usability` = '2'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: lungNavigation.php");
    }

    $sql = "SELECT usability FROM `user_score` WHERE `username` = '$loggedInUser' AND `usability` = '3'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: lungStyles.php");
    }

}


?>

</form>
</body>
</html>