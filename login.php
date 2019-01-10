<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Please provide a username or<br>
    login to an existing account</h1>

<form name = "login" method="post">

<div class = "login">
    <p>Username</p>
    <input type = "text" name="username" >

    <p>Password</p>
    <input type = "password" name="password" >

    <p><input type = "submit" name="submit"></p>

</div>

    <?php

    session_start();

    $username = strip_tags((isset($_POST["username"]) ? $_POST["username"] : ""));
    $password = (isset($_POST["password"]) ? md5($_POST["password"]) : "");

    $host = "devweb2018.cis.strath.ac.uk";
    $user = "wjb15159";
    $pass = "vahm0Iez4eex";
    $dbname = "wjb15159";
    $conn = new mysqli($host, $user, $pass, $dbname);

    if($conn->connect_error) {
        die("Connection failed".$conn->connect_error);
    }

    if(($username != "") && checkUsername($conn, $username)){
        $username = "";
        $usernameError = "There is already an account associated with that username, please choose another one.";
        echo "<p id='error'>".$usernameError."</p>";
    }

    if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
        $username = $_SESSION["username"];
        $password = $_SESSION["password"];
    }


    $sql = "INSERT INTO `user_score` (`username`, `password`, `age`, `ability`, `frequency`, `score`) VALUES ('$username', '$password', '12', '1', '2', '3');";

    if($conn->query($sql) === TRUE){
        header("Location: age.php");
        exit();
    }

    function checkUsername($connection, $username)
    {
        $sqlUsers = "SELECT * FROM `user_score` WHERE `username` = '$username'";
        $resultLogin = $connection->query($sqlUsers);

        if ($resultLogin->num_rows > 0) {
            return true;
        }
        return false;
    }

    ?>

</div>
</form>
</body>
</html>