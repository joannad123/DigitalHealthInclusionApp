<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription Tutorial</title>
    <link rel="stylesheet" href="style.css">
    <script src="slideshow.js"></script>
    <script src="previous.js"></script>

</head>
<body>
<form id="prescription" name="prescription" method="post">

<h1> Order Prescription Tutorial </h1>

<div class="slideshow-container">

    <div class="mySlides" style="display: block;">
        <p id="slides"><h1>Why should I order my prescription online?</h1></p>
        <p id="slides">Ordering your prescription online saves time <br>
            and means you don't need to make as many trips to the GP.</p>
        <p id="slides"><img src="images/walkingman.png" alt="Walking Man"></p>
    </div>

    <div class="mySlides">
        <p id="slides"><h1>How do I order my prescription online?</h1></p>
        <p id="slides">This guide will take you through the process step-by-step.</p>
        <p id="slides">This guide will use the mysurgerywebsite as a demonstration.</p>
        <p id="slides">You can use other services and most will be very similar.</p>
        <p id="slides">It is important to note that you can only use services which are supported by your GP.</p>
    </div>

    <div class="mySlides" >
        <p id="slides"><h1>Step 1 : Create an account/login</h1></p>
        <p id="slides">Here you will need to enter your name and email address if you don't already have an account.</p>
        <p id="slides">Or if you already have an account, enter your email address and password to login.</p>
        <p id="slides">Hopefully you are already comfortable creating a new account/logging in thanks to the login tutorial provided in the app!</p>
        <p id="slides"><img src="images/preTut1.png" alt="Step1"></p>
    </div>

    <div class="mySlides" >
        <p id="slides"><h1>Step 2 : Enter patient details</h1></p>
        <p id="slides">Here you will need to enter some personal details.</p>
        <p id="slides">Once you have done so, click on the step 2 tab at the top of the page.</p>
        <p id="slides"><img src="images/preTut2.png" alt="Step2"></p>
    </div>

    <div class="mySlides" >
        <p id="slides"><h1>Step 3 : Enter required medication</h1></p>
        <p id="slides">Here you will need to enter the name of the drug which you require and the quantity of it.</p>
        <p id="slides">As you type, suggestions will come up so don't worry if you can't quite remember the spelling.</p>
        <p id="slides"><img src="images/preTut3.png" alt="Step3"></p>
    </div>

    <div class="mySlides" >
        <p id="slides"><h1>Step 4 : Sending your request</h1></p>
        <p id="slides">You will now need to enter where you want to pick your prescription up from.</p>
        <p id="slides">To do this click on the drop down box next to <b>I will collect my prescription from:</b></p>
        <p id="slides">This list will be filtered with pharmacies local to your GP.</p>
        <p id="slides">The final step is to click send request.</p>
        <p id="slides"><img src="images/preTut4.png" alt="Step4"></p>
    </div>


    <a href="#" class="previous" onclick="plusSlides(-1)">&laquo; Previous</a>
    <a href="#" class="next" onclick="plusSlides(1)">Next &raquo;</a>
</div>

<div>

    <p align="center"> Click the left and right arrows to navigate through the information.</p>

    <p><input type="button" value="Previous" onclick="goBack()"></p>

    <p><input name="button" type="submit" value="Main Menu"></p>


</div>
</form>
<?php

include("config.php");

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
