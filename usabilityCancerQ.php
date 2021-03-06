<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usability</title>
    <link rel="stylesheet" href="style.css" />
    <script src="previous.js"></script>
</head>
<body>
<h1> Usability Preferences </h1>

<form id = "Quiz" name = "Quiz" method="post">
    <div class="quiz">

        <p><h2>Which of these options is more important to you when using a website?</h2></p>
        <input type = "radio" id = "1" name = "Q1" value = "ans1"> <label for="1">A lot of graphics</label><br>
        <input type = "radio" id = "2" name = "Q1" value = "ans2"> <label for="2">Clear navigation</label><br>
        <input type = "radio" id = "3" name = "Q1" value = "ans3"> <label for="3">Styles and colours being consistent</label><br>

        <p><input name = "button" type = "submit" value = "Submit" ></p>

        <p><input type="button" value="Previous" onclick="goBack()"></p>

        <p><input name="button1" type="submit" value="Main Menu"></p>

        <p><input type ="button" value="Logout" id="logout"
                  onclick="window.location = 'logout.php'"/></p>

    </div>
</form>
</body>

    <?php

    include ("config.php");

    session_start();

    if(empty($_SESSION)) {
        header("Location: register.php");
    }

    $loggedInUser = $_SESSION['username'];

    if (isset($_POST['button1'])) {

        $sqlUsersScore = "SELECT score FROM `user_score` WHERE `username` = '$loggedInUser' AND `score` = '1'";
        $resultScore = $conn->query($sqlUsersScore);

        if ($resultScore->num_rows > 0) {
            header("Location: basicMenu.php");
        } else {
            header("Location: advancedMenu.php");
        }
    }

    if(isset($_POST['Q1'])) {
        $answer1 = $_POST['Q1'];
    }

    if (isset($_POST['button'])) {
        if ($answer1 == "ans1") {
            $sqlUpdate = "UPDATE user_score SET usability='1' WHERE username='$loggedInUser'";
            $resultUpdate = $conn->query($sqlUpdate);
            echo "<script>
                    alert('Your answer has been saved. You will now be redirected to the webpage recommender menu.');
                    window.location.href='cancerChoice.php';
                    </script>";
        }

        if ($answer1 == "ans2") {
            $sqlUpdate = "UPDATE user_score SET usability='2' WHERE username='$loggedInUser'";
            $resultUpdate = $conn->query($sqlUpdate);
            echo "<script>
                    alert('Your answer has been saved. You will now be redirected to the webpage recommender menu.');
                    window.location.href='cancerChoice.php';
                    </script>";
        }

        if ($answer1 == "ans3") {
            $sqlUpdate = "UPDATE user_score SET usability='3' WHERE username='$loggedInUser'";
            $resultUpdate = $conn->query($sqlUpdate);
            echo "<script>
                    alert('Your answer has been saved. You will now be redirected to the webpage recommender menu.');
                    window.location.href='cancerChoice.php';
                    </script>";
        }
    }


    ?>


</body>
</html>
