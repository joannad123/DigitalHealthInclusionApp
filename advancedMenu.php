<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Menu</title>
    <link rel="stylesheet" href="style.css">
    <script src="slideshow.js"></script>
</head>
<p>

<div id="navbar">
    <ul>
        <li>
            <div class="dropdown">
                <button class="dropbtn">Digital Skills Quizzes</button>
                <div class="dropdown-content">
                    <a href="abbQuiz.php">Abbreviation Quiz</a>
                    <a href="spotQuiz.php">Spot the Danger Quiz</a>
                </div>
            </div></li>
        <li>
            <div class="dropdown">
                <button class="dropbtn">Digital Health</button>
                <div class="dropdown-content">
                    <a href="digitalHealth.php">What is it?</a>
                </div>
            </div></li>
        <li>
            <div class="dropdown">
                <button class="dropbtn">Cancer</button>
                <div class="dropdown-content">
                    <a href="usabilityCancerQ.php">Recommended Sites</a>
                </div>
            </div></li>
        <li>
            <div class="dropdown">
                <button class="dropbtn">Pharmacy</button>
                <div class="dropdown-content">
                    <a href="usabilityPharmacyQ.php">Recommended Sites</a>
                    <a href="prescriptionTutorial.php">Prescription Tutorial</a>
                </div>
            </div></li>
            <li><div class="dropdown">
                <button class="dropbtn">Account</button>
                <div class="dropdown-content">
                    <a href="logout.php">Logout</a>
                </div></li>
            </div>
        </li>
    </ul>
</div>


<div id="advSlideshow">
    <div>
        <img src="images/digital.png" alt="Digital"/>
    </div>
    <div>
        <img src="images/digihealth.jpg" alt="Digital health"/>
    </div>
    <div>
        <img src="images/digitalinc.png" alt="Digital inclusion"/>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
    $("#advSlideshow > div:gt(0)").hide();

    setInterval(function() {
        $('#advSlideshow > div:first')
            .fadeOut(1500)
            .next()
            .fadeIn(1500)
            .end()
            .appendTo('#advSlideshow');
    }, 4500);
</script>

<?php

include("config.php");

session_start();

if(empty($_SESSION)) {
    header("Location: register.php");
}

$loggedInUser = $_SESSION['username'];


?>

</body>
</html>