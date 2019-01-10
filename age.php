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

</div>

    <?php

    $age = strip_tags((isset($_POST["age"]) && is_numeric($_POST["age"])) ? $_POST["age"] : "");

    $host = "devweb2018.cis.strath.ac.uk";
    $user = "wjb15159";
    $pass = "vahm0Iez4eex";
    $dbname = "wjb15159";
    $conn = new mysqli($host, $user, $pass, $dbname);

    if($conn->connect_error) {
        die("Connection failed".$conn->connect_error);
    }


    //TODO : check username that is logged in and update age for that entry

    $sql = "UPDATE user_score SET age='$age' WHERE username='joanna'";

    if($conn->query($sql) === TRUE) {
        echo "<p>You have successfully submitted your age.</p>";
    }

    ?>

</form>
</body>
</html>