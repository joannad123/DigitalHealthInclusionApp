<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Frequency</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>How often do you use technology?</h1>
<div class = "frequency">

    <form id= "frequency" method="post">

        <p><button name="click" type="submit" value="1" id="click">Rarely Ever</button></p>
        <p><button name="click" type="submit" value="2" id="click">A few times a month</button></p>
        <p><button name="click" type="submit" value="3" id="click">A few times a week</button></p>
        <p><button name="click" type="submit" value="4" id="click">Everyday</button></p>

        <input type ="button" value="Logout" id="logout"
               onclick="window.location = 'logout.php'"/>
</div>

    <?php

    include ("config.php");

    session_start();

    $loggedInUser = $_SESSION['username'];

    $frequency = "";

    if(isset($_POST['click'])){
        $frequency = $_POST['click'];
    }

    $sql = "UPDATE user_score SET frequency='$frequency' WHERE username='$loggedInUser'";

    if($conn->query($sql) === TRUE) {
            echo "<script>
            alert('You have successfully submitted your answer!');
            window.location.href='beginnerMenu.php';
            </script>";
            exit();
    }

    ?>

</body>
</html>