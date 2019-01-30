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
<h1>Listed below are websites which offer online prescription ordering.</h1>
<h2>They are ranked in order of usability, with the most user friendly page at the top.</h2>
<h3>You can view the criteria used to rank these pages by clicking the previous button and selecting<br>
    usability chart from the menu.</h3>
<div class = "pharmacyMenu">

    <table id="webTable">
        <tr>
            <th>Website</th>
            <th>Description</th>
            <th>Link</th>
            <th>Logo</th>
        </tr>
        <tr>
            <td>1.Boots</td>
            <td>Provides a service to order prescriptions</td>
            <td><a href="https://www.boots.com/online-prescriptions/repeats">Click here to visit</a></td>
            <td><img src="images/pharmacy1.png" alt="Boots"></td>
        </tr>
        <tr>
            <td>2.Lloyds Pharmacy </td>
            <td>Provides a service to order prescriptions and an online doctor</td>
            <td><a href="http://www.lloydspharmacy.com/en/info/online-prescription-services">Click here to visit</a></td>
            <td><img src="images/pharmacy2.png" alt="Lloyds Pharmacy"></td>
        </tr>
        <tr>
            <td>3.Simple Online Pharmacy</td>
            <td>Provides a service to order prescriptions and an online doctor</td>
            <td><a href="https://www.simpleonlinepharmacy.co.uk/about/">Click here to visit</a></td>
            <td><img src="images/pharmacy3.png" alt="Simple Online Pharmacy"></td>
        </tr>
    </table>

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

</body>
</html>
