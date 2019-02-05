<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Menu</title>
    <link rel="stylesheet" href="style.css">
    <script src="previous.js"></script>
</head>
<body>
<h1>Please choose which quiz you would like to try first<br>
    Or if you'd like a tutorial on how to do the quizzes, click the Quiz Tutorial button</h1>
<div class = "quizMenu">

    <p><input type ="button" value="Login Quiz" id="optionsBtn"
              onclick="window.location = 'loginQuiz.php'"/></p>

    <p><input type ="button" value="Internet Safety Quiz" id="optionsBtn"
              onclick="window.location = 'safetyQuiz.php'"/></p>

    <p><input type ="button" value="App Quiz" id="optionsBtn"
              onclick="window.location = 'appQuiz.php'"/></p>

    <p><input type ="button" value="Quiz Tutorial" id="optionsBtn"
              onclick="window.location = 'quizTutorial.php'"/></p>

    <p><input type="button" value="Previous" onclick="goBack()"></p>

    <p><input type="button" value="Main Menu" onclick="window.location = 'basicMenu.php'"></p>

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

$sqlUsersScore = "SELECT score FROM `user_score` WHERE `username` = '$loggedInUser' AND `score` = '1'";
$resultScore = $conn->query($sqlUsersScore);

if ($resultScore->num_rows > 0) {
    $sqlUserLogin = "SELECT loginquiz FROM `user_score` WHERE `username` = '$loggedInUser' AND `loginquiz` > '0'";
    $resultLogin = $conn->query($sqlUserLogin);

    if($resultLogin->num_rows > 0) {
        $sqlUserSafety = "SELECT safetyquiz FROM `user_score` WHERE `username` = '$loggedInUser' AND `safetyquiz` > '0'";
        $resultSafety = $conn->query($sqlUserSafety);

        if($resultSafety->num_rows > 0) {
            $sqlUserApp = "SELECT appquiz FROM `user_score` WHERE `username` = '$loggedInUser' AND `appquiz` > '0'";
            $resultApp = $conn->query($sqlUserApp);

            if($resultApp->num_rows > 0) {
                $sqlUpdate = "UPDATE user_score SET score='2' WHERE username='$loggedInUser'";
                $resultUpdate = $conn->query($sqlUpdate);

                echo "<script>
                    alert('You have unlocked the advanced version of the app!');
                    window.location.href='advancedMenu.php';
                    </script>";
            }
        }
    }
}



?>

</form>
</body>
</html>