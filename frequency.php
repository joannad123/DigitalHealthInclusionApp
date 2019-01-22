<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Frequency</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>How often do you use technology?</h1>
<div class="frequency">

    <form id="frequency" method="post">

        <p>
            <button name="click" type="submit" value="1" id="click">Rarely Ever</button>
        </p>
        <p>
            <button name="click" type="submit" value="2" id="click">A few times a month</button>
        </p>
        <p>
            <button name="click" type="submit" value="3" id="click">A few times a week</button>
        </p>
        <p>
            <button name="click" type="submit" value="4" id="click">Everyday</button>
        </p>

        <input type="button" value="Logout" id="logout"
               onclick="window.location = 'logout.php'"/>
</div>

<?php

include("config.php");

session_start();

if (empty($_SESSION)) {
    header("Location: register.php");
}

$loggedInUser = $_SESSION['username'];

$frequency = "";

if (isset($_POST['click'])) {
    $frequency = $_POST['click'];
}

$sql = "UPDATE user_score SET frequency='$frequency' WHERE username='$loggedInUser'";

if ($conn->query($sql) === TRUE) {

    echo "<script>
            alert('You have successfully submitted your answer!');
            </script>";

    $sqlUsersAge = "SELECT age FROM `user_score` WHERE `username` = '$loggedInUser' AND `age` > '65'";
    $resultAge = $conn->query($sqlUsersAge);

    if ($resultAge->num_rows > 0) {
        //if user is > 65
        $sqlUsersAbility = "SELECT ability FROM `user_score` WHERE `username` = '$loggedInUser' AND `ability` = '3'";
        $resultAbility = $conn->query($sqlUsersAbility);

        if ($resultAbility->num_rows > 0) {

            $sqlUsersFrequency = "SELECT frequency FROM `user_score` WHERE `username` = '$loggedInUser' AND `frequency` > '1'";
            $resultFrequency = $conn->query($sqlUsersFrequency);

            if ($resultFrequency->num_rows > 0) {
                //if conditions met
                //if user > 65 AND ability=3 AND frequency>1
                $sqlUpdate = "UPDATE user_score SET score='2' WHERE username='$loggedInUser'";
                $resultUpdate = $conn->query($sqlUpdate);
                echo "<script>
                    alert('You have unlocked the advanced version of the app!');
                    window.location.href='advancedMenu.php';
                    </script>";
            }
        }
    } else {
        //user is < 65
        $sqlUsersAbility = "SELECT ability FROM `user_score` WHERE `username` = '$loggedInUser' AND `ability` > '1'";
        $resultAbility = $conn->query($sqlUsersAbility);

        if ($resultAbility->num_rows > 0) {

            $sqlUsersFrequency = "SELECT frequency FROM `user_score` WHERE `username` = '$loggedInUser' AND `frequency` > '2'";
            $resultFrequency = $conn->query($sqlUsersFrequency);

            if ($resultFrequency->num_rows > 0) {
                //if conditions met
                //if user < 65 AND ability>1 AND frequency>2
                $sqlUpdate = "UPDATE user_score SET score='2' WHERE username='$loggedInUser'";
                $resultUpdate = $conn->query($sqlUpdate);
                echo "<script>
                    alert('You have unlocked the advanced version of the app!');
                    window.location.href='advancedMenu.php';
                    </script>";

            }
        } else {
            //if any other condition
            $sqlUpdate = "UPDATE user_score SET score='1' WHERE username='$loggedInUser'";
            $resultUpdate = $conn->query($sqlUpdate);
            echo "<script>
                    alert('You have unlocked the basic version of the app!');
                    window.location.href='basicMenu.php';
                    </script>";
        }
    }

}

?>

</body>
</html>