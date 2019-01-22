<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Please enter a username and password</h1>

<form name = "register" method="post">

    <div class = "register">
        <p>Username</p>
        <input type = "text" name="username" >

        <p>Password</p>
        <input type = "password" name="password" >

        <p><input type = "submit" name="submit"></p>

        <p><h2> If you already have an account, click go to login<br>
                If you'd like a tutorial on logging in/registering, click go to tutorial</h2></p>

        <p><input type ="button" value="Go To Login" id="loginBtn"
                  onclick="window.location = 'login.php'"/>

            <input type ="button" value="Go To Tutorial" id="tutBtn"
                   onclick="window.location = 'loginTutorial.php'"/></p>
    </div>

    <?php

    include ("config.php");

    $username = strip_tags((isset($_POST["username"]) ? $_POST["username"] : ""));
    $password = (isset($_POST["password"]) ? ($_POST["password"]) : "");

    if(($username != "") && checkUsername($conn, $username)){
        $username = "";
        echo "<script>
        alert('There is already an account associated with that username, please choose another one.');
        </script>";
    }

    $sql = "";

    if($username != "" && $password != "") {
        $sql = "INSERT INTO `user_score` (`username`, `password`, `age`, `ability`, `frequency`, `score`, `logincount`) VALUES ('$username', '$password', '30', '1', '2', '3', '0');";
        if ($conn->query($sql) === TRUE) {
            echo "<script>
        alert('Account created successfully, now login');
        window.location.href='login.php';
        </script>";
            exit();
        }
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

