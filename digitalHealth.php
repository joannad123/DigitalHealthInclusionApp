<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Health</title>
    <link rel="stylesheet" href="style.css">
    <script src="slideshow.js"></script>
    <script src="previous.js"></script>

</head>
<body>
<form id="DigitalHealth" name="DigitalHealth" method="post">

<h1> Digital Health </h1>

<div class="slideshow-container">

    <div class="mySlides" style="display: block;">
        <p id="slides">
        <h1>What is digital health?  <img src="images/digih.png" alt="Digital Health"></h1></p>
        <p id="slides">Digital health is the use of technologies to enhance health and the overall efficiency of the
            healthcare system.</p>
        <p id="slides">To help explain what digital health is, we will look specifically at a few categories.</p>
    </div>

    <div class="mySlides">
        <p id="slides">
        <h1>Telemedicine   <img src="images/telemedicine.png" alt="Telemedicine"></h1></p>
        <p id="slides">One of the main aims of moving healthcare online is to make it easier for the patient.</p>
        <p id="slides">Telemedicine is a way of providing health advice through mobile apps or video chats.</p>
        <p id="slides">There are many applications which provide this service.</p>
        <p id="slides">It allows patients to speak to a doctor without having to worry about getting to the GP.</p>
    </div>

    <div class="mySlides">
        <p id="slides">
        <h1>Wearables   <img src="images/wearables.png" alt="Wearables"></h1></p>
        <p id="slides">Wearables are technologies which can be comfortably worn on the body.</p>
        <p id="slides">Two well-known examples of wearables are Apple Watch and Fitbit.</p>
        <p id="slides">These devices have a number of capabilities such as tracking your blood pressure, heart rate and
            body temperature.</p>
    </div>

    <div class="mySlides">
        <p id="slides">
        <h1>mHealth     <img src="images/mhealth.png" alt="mHealth"></h1></p>
        <p id="slides">mHealth is mobile health programs, made specifically for smart devices such as mobiles and
            tablets.</p>
        <p id="slides">There is a huge range of different mHealth apps.</p>
        <p id="slides">Some of the most common apps are fitness apps and mental health apps.</p>
    </div>

    <div class="mySlides">
        <p id="slides">
        <h1>So much more!</h1></p>
        <p id="slides">There are so many different categories within digital health.</p>
        <p id="slides">If you are interested in learning about even more, visit healthcaretechnologies.com.</p>
        <p id="slides"><a href="https://www.healthcaretechnologies.com/">Click here to visit</a></p>
    </div>

    <a href="#" class="previous" onclick="plusSlides(-1)">&laquo; Previous</a>
    <a href="#" class="next" onclick="plusSlides(1)">Next &raquo;</a>
</div>

<div>

    <p align="center"> Click the left and right arrows to navigate through the information.</p>

    <p><input name="button" type="submit" value="Main Menu"></p>



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


?>

</body>
</html>
