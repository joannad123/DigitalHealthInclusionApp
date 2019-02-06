<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Recommender</title>
    <link rel="stylesheet" href="style.css">
    <script src="previous.js"></script>
</head>
<body>
<form id="pharmacy" name="pharmacy" method="post">

<h1>Listed below are websites which offer online prescription ordering.</h1>
<h2>They are ranked in order of site that provides the clearest steps.</h2>

<div class = "pharmacyMenu">

    <table id="webTable">
        <tr>
            <th>Website</th>
            <th>Description</th>
            <th>Link</th>
            <th>Logo</th>
        </tr>
        <tr>
            <td>1.Simple Online Pharmacy</td>
            <td>Provides clear steps throughout the process and before.</td>
            <td><a href="https://www.simpleonlinepharmacy.co.uk/about/">Click here to visit</a></td>
            <td><img src="images/pharmacy3.png" alt="Simple Online Pharmacy"></td>

        </tr>
        <tr>
            <td>2.Boots</td>
            <td>Provides clear steps before the process begins.</td>
            <td><a href="https://www.boots.com/online-prescriptions/repeats">Click here to visit</a></td>
            <td><img src="images/pharmacy1.png" alt="Boots"></td>

        </tr>
        <tr>
            <td>3.Lloyds Pharmacy </td>
            <td>Provides clear steps once you have began the process.</td>
            <td><a href="http://www.lloydspharmacy.com/en/info/online-prescription-services">Click here to visit</a></td>
            <td><img src="images/pharmacy2.png" alt="Lloyds Pharmacy"></td>
        </tr>
    </table>

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

</body>
</html>
