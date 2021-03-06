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
<form id="breastcancer" name="breastcancer" method="post">
<h1>Listed below are websites which offer support for anyone affected in any way by breast cancer.</h1>
<h2>They are ranked in order of usability, with the most user friendly page at the top.</h2>
<h3>You can view the criteria used to rank these pages by clicking the previous button and selecting<br>
    usability chart from the menu.</h3>
<div class = "cancerMenu">

    <table id="webTable">
        <tr>
            <th>Website</th>
            <th>Description</th>
            <th>Link</th>
            <th>Logo</th>
        </tr>
        <tr>
            <td>1.Breast Cancer Care</td>
            <td>Provides information and support regarding breast cancer</td>
            <td><a href="https://www.breastcancercare.org.uk/information-support">Click here to visit</a></td>
            <td><img src="images/bCancer1.png" alt="Breast Cancer Care"></td>
        </tr>
        <tr>
            <td>2.Macmillan Cancer Support</td>
            <td>Provides information and support regarding all types of cancer</td>
            <td><a href="https://www.macmillan.org.uk/information-and-support/breast-cancer">Click here to visit</a></td>
            <td><img src="images/bCancer2.png" alt="Macmillan Cancer Support"></td>
        </tr>
        <tr>
            <td>3.Breast Cancer Support</td>
            <td>Provides information and support regarding breast cancer</td>
            <td><a href="https://breastcancersupport.org.uk/">Click here to visit</a></td>
            <td><img src="images/bCancer3.png" alt="Breast Cancer Support"></td>
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
