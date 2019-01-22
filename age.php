<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Age</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>What age are you?</h1>

<form name = "login" method="post">

    <div class = "age">

        <p>Age</p>
        <input type = "number" name="age">

        <p><input type = "submit" name="submit"></p>

        <input type ="button" value="Logout" id="logout"
               onclick="window.location = 'logout.php'"/>
    </div>

    <?php

    include ("config.php");

    session_start();

    if(empty($_SESSION)) {
        header("Location: register.php");
    }

    $loggedInUser = $_SESSION['username'];

    $age = strip_tags((isset($_POST["age"]) && is_numeric($_POST["age"])) ? $_POST["age"] : "");

    $sql = "UPDATE user_score SET age='$age' WHERE username='$loggedInUser'";

    if($conn->query($sql) === TRUE) {
        echo "<script>
            alert('You have successfully submitted your answer!');
            window.location.href='ability.php';
            </script>";
        exit();
    }

    ?>



</form>
</body>
</html>


