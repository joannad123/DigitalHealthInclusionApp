<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css" />
    <script src="previous.js"></script>
</head>
<body>
<h1> Internet Safety Quiz! </h1>

<form id = "Quiz" name = "Quiz" method="post">
    <div class="quiz">

        <p><b>1.What should you try to limit when on the internet?</b></p>
        <input type = "radio" id = "1" name = "Q1" value = "ans1"> <label for="1">Amount of personal information you share</label><br>
        <input type = "radio" id = "2" name = "Q1" value = "ans2"> <label for="2">Your usage</label><br>
        <input type = "radio" id = "3" name = "Q1" value = "ans3"> <label for="3">How much you pay for your broadband</label><br>

        <p><b>2.What does this padlock icon before a websites web address mean?</b></p>
        <p><img src="images/padlock.png" alt="Padlock"></p>
        <input type = "radio" id = "4" name = "Q2" value = "ans1"> <label for="4">The website requires a password to access</label><br>
        <input type = "radio" id = "5" name = "Q2" value = "ans2"> <label for="5">The website is secure</label><br>
        <input type = "radio" id = "6" name = "Q2" value = "ans3"> <label for="6">The website is unsafe</label><br>

        <p><b>3.Which social networking site is completely safe?</b></p>
        <input type = "radio" id = "7" name = "Q3" value = "ans1"> <label for="7">Facebook</label><br>
        <input type = "radio" id = "8" name = "Q3" value = "ans2"> <label for="8">Twitter</label><br>
        <input type = "radio" id = "9" name = "Q3" value = "ans3"> <label for="9">None are completely safe</label><br>

        <p><b>4.What should you always do once you've finished using an application that required you to login?</b></p>
        <input type = "radio" id = "10" name = "Q4" value = "ans1"> <label for="10">Close the page</label><br>
        <input type = "radio" id = "11" name = "Q4" value = "ans2"> <label for="11">Logout</label><br>
        <input type = "radio" id = "12" name = "Q4" value = "ans3"> <label for="12">Never use it again</label><br>

        <br>
        <input type="button" value="Previous" onclick="location.href='quizzes.php'">
        <input type="button" value="Main Menu" onclick="location.href='basicMenu.php'">
        <input name = "button" type = "submit" value = "Submit" >
        <br>

    </div>
</form>


<?php

include ("config.php");

session_start();

if(empty($_SESSION)) {
    header("Location: register.php");
}

$loggedInUser = $_SESSION['username'];

$answer1 = "";
$answer2 = "";
$answer3 = "";
$answer4 = "";

if(isset($_POST['Q1'])) {
    $answer1 = $_POST['Q1'];
}

if(isset($_POST['Q2'])) {
    $answer2 = $_POST['Q2'];
}

if(isset($_POST['Q3'])) {
    $answer3 = $_POST['Q3'];
}

if(isset($_POST['Q4'])) {
    $answer4 = $_POST['Q4'];
}
$totalCorrect = 0;
$question1wrong = false;
$question2wrong = false;
$question3wrong = false;
$question4wrong = false;

if ($answer1 == "ans1") {
    $totalCorrect++;
}else {
    $question1wrong = true;
}

if ($answer2 == "ans2") {
    $totalCorrect++;
}else {
    $question2wrong = true;
}

if ($answer3 == "ans3") {
    $totalCorrect++;
}else {
    $question3wrong = true;
}

if ($answer4 == "ans2") {
    $totalCorrect++;
}else {
    $question4wrong = true;
}

echo "<div class='results'>$totalCorrect / 4 correct</div>";

if (isset($_POST['button'])) {

    if ($totalCorrect == 4) {
        $sqlFull = "UPDATE user_score SET safetyquiz = safetyquiz + 1 WHERE username='$loggedInUser'";
        if ($conn->query($sqlFull) === TRUE) {
            echo "<script>
            alert('You have scored full marks, well done! Now click the previous button at the bottom of the page to go back to the menu');
            </script>";
        }
    }

    if($totalCorrect != 4){
        echo "<script>
        alert('Not quite full marks, check the bottom of the page to see which questions you got wrong!');
        </script>";
    }


    if ($question1wrong == true) {
        echo "<div class='results'>You got question 1 wrong </div>";
    }

    if ($question2wrong == true) {
        echo "<div class='results'>You got question 2 wrong </div>";
    }

    if ($question3wrong == true) {
        echo "<div class='results'>You got question 3 wrong </div>";
    }

    if ($question4wrong == true) {
        echo "<div class='results'>You got question 4 wrong </div>";
    }


}


?>

</body>
</html>
