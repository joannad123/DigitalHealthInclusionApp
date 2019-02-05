<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Tutorial</title>
    <link rel="stylesheet" href="style.css">
    <script src="slideshow.js"></script>
    <script src="previous.js"></script>

</head>
<body>
<h1> Quiz Tutorial </h1>

<div class="slideshow-container">

    <div class="mySlides" style="display: block;">
        <p id="slides"><h1>Why should I do these quizzes?</h1></p>
        <p id="slides">The quizzes are a bit of fun that will also improve your digital knowledge.</p>
        <p id="slides">You should aim to get full marks in the quizzes.</p>
        <p id="slides">If you get full marks in all three quizzes, you can unlock the advanced version of the app!</p>
    </div>

    <div class="mySlides">
        <p id="slides"><h1>How do I do these quizzes?</h1></p>
        <p id="slides">The questions are labelled with numbers.</p>
        <p id="slides">You are given three choices, one of which is the correct answer.</p>
        <p id="slides">To select the answer you think is correct, click the small circle next to your answer.</p>
        <p id="slides">You must select one choice for each question.</p>
        <p id="slides">Once you have selected all your choices, click the submit button at the bottom of the page.</p>
        <p id="slides">Then click the previous button to go back to the quiz menu.</p>
    </div>

    <div class="mySlides" >
        <p id="slides"><h1>Completed quiz</h1></p>
        <p id="slides">This is what your screen should look like once you have made all your choices.</p>
        <p id="slides"><img src="images/loginquiz.png" alt="Completed quiz"></p>
    </div>

    <a href="#" class="previous" onclick="plusSlides(-1)">&laquo; Previous</a>
    <a href="#" class="next" onclick="plusSlides(1)">Next &raquo;</a>
</div>

<div>

    <p align="center"> Click the left and right arrows to navigate through the information.<br>
        Once you are comfortable, click the previous button below to go to the quizzes page.</p>

    <p><input type="button" value="Previous" onclick="goBack()"></p>
    <p><input type="button" value="Main Menu" onclick="location.href='basicMenu.php'"></p>


</div>

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
