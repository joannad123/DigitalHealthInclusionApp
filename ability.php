<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ability</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>How would you rate your ability to use an application<br>
    and its basic functions (For example, logging in<br>
    or navigating menus)?</h1>
<div class = "ability">

    <form id= "ability" method="post">

        <p><button name="click" type="submit" value="1" id="click">Beginner</button></p>
        <p><button name="click" type="submit" value="2" id="click">Average</button></p>
        <p><button name="click" type="submit" value="3" id="click">Advanced</button></p>

        <input type ="button" value="Logout" id="logout"
               onclick="window.location = 'logout.php'"/>
</div>

    <?php

    include ("config.php");

    session_start();

    $loggedInUser = $_SESSION['username'];

    $ability = "";

    if(isset($_POST['click'])){
        $ability = $_POST['click'];
    }

    $sql = "UPDATE user_score SET ability='$ability' WHERE username='$loggedInUser'";

    if($conn->query($sql) === TRUE) {
        echo "<script>
            alert('You have successfully submitted your answer!');
            window.location.href='frequency.php';
            </script>";
            exit();
    }

    ?>

</form>
</body>
</html>