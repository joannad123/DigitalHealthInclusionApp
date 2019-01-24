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

    $sqlUsersAbility1 = "SELECT ability FROM `user_score` WHERE `username` = '$loggedInUser' AND `ability` = '1'";
    $resultAbility1 = $conn->query($sqlUsersAbility1);

    if ($resultAbility1->num_rows > 0) {
        $sqlUpdate = "UPDATE user_score SET score='1' WHERE username='$loggedInUser'";
        $resultUpdate = $conn->query($sqlUpdate);
        echo "<script>
                    alert('You have unlocked the basic version of the app!');
                    window.location.href='basicMenu.php';
                    </script>";
    }

    $sqlUsersFrequency = "SELECT frequency FROM `user_score` WHERE `username` = '$loggedInUser' AND `frequency` = '1'";
    $resultFrequency = $conn->query($sqlUsersFrequency);

    if ($resultFrequency->num_rows > 0) {
        $sqlUpdate = "UPDATE user_score SET score='1' WHERE username='$loggedInUser'";
        $resultUpdate = $conn->query($sqlUpdate);
        echo "<script>
                    alert('You have unlocked the basic version of the app!');
                    window.location.href='basicMenu.php';
                    </script>";
    }

    $sqlUsersAbility3 = "SELECT ability FROM `user_score` WHERE `username` = '$loggedInUser' AND `ability` = '3'";
    $resultAbility3 = $conn->query($sqlUsersAbility3);

    if ($resultAbility3->num_rows > 0) {
        $sqlUsersFreq3 = "SELECT frequency FROM `user_score` WHERE `username` = '$loggedInUser' AND `frequency` < '3'";
        $resultFreq3 = $conn->query($sqlUsersFreq3);

        if ($resultFreq3->num_rows > 0) {
            $sqlUpdate = "UPDATE user_score SET score='1' WHERE username='$loggedInUser'";
            $resultUpdate = $conn->query($sqlUpdate);
            echo "<script>
                    alert('You have unlocked the basic version of the app!');
                    window.location.href='basicMenu.php';
                    </script>";
        }
    }

    $sqlUsersAbility2 = "SELECT ability FROM `user_score` WHERE `username` = '$loggedInUser' AND `ability` > '2'";
    $resultAbility2 = $conn->query($sqlUsersAbility2);

    if ($resultAbility2->num_rows > 0) {
        $sqlUpdate = "UPDATE user_score SET score='2' WHERE username='$loggedInUser'";
        $resultUpdate = $conn->query($sqlUpdate);
        echo "<script>
                    alert('You have unlocked the advanced version of the app!');
                    window.location.href='advancedMenu.php';
                    </script>";
    }

    $sqlUsersAgeO = "SELECT age FROM `user_score` WHERE `username` = '$loggedInUser' AND `age` > '65'";
    $resultAgeO = $conn->query($sqlUsersAgeO);

    if ($resultAgeO->num_rows > 0) {
        $sqlUsersAbilityE2 = "SELECT ability FROM `user_score` WHERE `username` = '$loggedInUser' AND `ability` = '2'";
        $resultAbilityE2 = $conn->query($sqlUsersAbilityE2);

        if ($resultAbilityE2->num_rows > 0) {
            $sqlUpdate = "UPDATE user_score SET score='1' WHERE username='$loggedInUser'";
            $resultUpdate = $conn->query($sqlUpdate);
            echo "<script>
                    alert('You have unlocked the basic version of the app!');
                    window.location.href='basicMenu.php';
                    </script>";
        }
    }

    $sqlUsersAgeU = "SELECT age FROM `user_score` WHERE `username` = '$loggedInUser' AND `age` < '65'";
    $resultAgeU = $conn->query($sqlUsersAgeU);

    if ($resultAgeU->num_rows > 0) {
        $sqlUsersFreq3 = "SELECT frequency FROM `user_score` WHERE `username` = '$loggedInUser' AND `frequency` < '3'";
        $resultFreq3 = $conn->query($sqlUsersFreq3);

        if ($resultFreq3->num_rows > 0) {
            $sqlUpdate = "UPDATE user_score SET score='1' WHERE username='$loggedInUser'";
            $resultUpdate = $conn->query($sqlUpdate);
            echo "<script>
                    alert('You have unlocked the basic version of the app!');
                    window.location.href='basicMenu.php';
                    </script>";
        }
    }

    $sqlUsersAgeU = "SELECT age FROM `user_score` WHERE `username` = '$loggedInUser' AND `age` < '65'";
    $resultAgeU = $conn->query($sqlUsersAgeU);

    if ($resultAgeU->num_rows > 0) {
        $sqlUsersFreq2 = "SELECT frequency FROM `user_score` WHERE `username` = '$loggedInUser' AND `frequency` > '2'";
        $resultFreq2 = $conn->query($sqlUsersFreq2);

        if ($resultFreq2->num_rows > 0) {
            $sqlUpdate = "UPDATE user_score SET score='2' WHERE username='$loggedInUser'";
            $resultUpdate = $conn->query($sqlUpdate);
            echo "<script>
                    alert('You have unlocked the advanced version of the app!');
                    window.location.href='advancedMenu.php';
                    </script>";

        }
    }
}
?>

</body>
</html>