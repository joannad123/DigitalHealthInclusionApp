<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <script src="previous.js"></script>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<h1> Abbreviation Quiz! </h1>

<form id="Quiz" name="Quiz" method="post">
    <div class="quiz">

        <p><b>1.What does URL stand for?</b></p>
        <input type="radio" id="1" name="Q1" value="ans1"> <label for="1">Uniform Resource Locator</label><br>
        <input type="radio" id="2" name="Q1" value="ans2"> <label for="2">Universal Redirect Location</label><br>
        <input type="radio" id="3" name="Q1" value="ans3"> <label for="3">Uniform Redirect Locator</label><br>

        <p><b>2.What does HTTPS stand for?</b></p>
        <input type="radio" id="4" name="Q2" value="ans1"> <label for="4">Hyper Transfer Text Page Secure</label><br>
        <input type="radio" id="5" name="Q2" value="ans2"> <label for="5">Hyper Text Transfer Protocol
            Secure</label><br>
        <input type="radio" id="6" name="Q2" value="ans3"> <label for="6">Hyper Text Transfer Protocol Safe</label><br>

        <p><b>3.What does USB stand for?</b></p>
        <input type="radio" id="7" name="Q3" value="ans1"> <label for="7">Uniform Series Box</label><br>
        <input type="radio" id="8" name="Q3" value="ans2"> <label for="8">Universal Serial Bus</label><br>
        <input type="radio" id="9" name="Q3" value="ans3"> <label for="9">Universal Secure Bus</label><br>

        <p><b>4.What does WWW stand for?</b></p>
        <input type="radio" id="10" name="Q4" value="ans1"> <label for="10">Web World Wide</label><br>
        <input type="radio" id="11" name="Q4" value="ans2"> <label for="11">World Wide Wikipedia</label><br>
        <input type="radio" id="12" name="Q4" value="ans3"> <label for="12">World Wide Web</label><br>

        <br>
        <input type="button" value="Previous" onclick="goBack()">
        <input name="button" type="submit" value="Submit">
        <br>

    </div>
</form>


<?php

include("config.php");

session_start();

if (empty($_SESSION)) {
    header("Location: register.php");
}

$loggedInUser = $_SESSION['username'];

$answer1 = "";
$answer2 = "";
$answer3 = "";
$answer4 = "";

if (isset($_POST['Q1'])) {
    $answer1 = $_POST['Q1'];
}

if (isset($_POST['Q2'])) {
    $answer2 = $_POST['Q2'];
}

if (isset($_POST['Q3'])) {
    $answer3 = $_POST['Q3'];
}

if (isset($_POST['Q4'])) {
    $answer4 = $_POST['Q4'];
}
$totalCorrect = 0;
$question1wrong = false;
$question2wrong = false;
$question3wrong = false;
$question4wrong = false;

if ($answer1 == "ans1") {
    $totalCorrect++;
} else {
    $question1wrong = true;
}

if ($answer2 == "ans2") {
    $totalCorrect++;
} else {
    $question2wrong = true;
}

if ($answer3 == "ans2") {
    $totalCorrect++;
} else {
    $question3wrong = true;
}

if ($answer4 == "ans3") {
    $totalCorrect++;
} else {
    $question4wrong = true;
}

echo "<div class='results'>$totalCorrect / 4 correct</div>";


if (isset($_POST['button'])) {

    if ($totalCorrect == 4) {
        echo "<script>
            alert('You have scored full marks, well done!');
            </script>";
    } else {
        echo "<script>
            alert('Not quite full marks, check the bottom of the page to see which questions you got wrong!');
            </script>";
    }

    if($question1wrong == true) {
        echo "<div class='results'>You got question 1 wrong </div>";
    }

    if($question2wrong == true) {
        echo "<div class='results'>You got question 2 wrong </div>";
    }

    if($question3wrong == true) {
        echo "<div class='results'>You got question 3 wrong </div>";
    }

    if($question4wrong == true) {
        echo "<div class='results'>You got question 4 wrong </div>";
    }
}


?>

</body>
</html>
