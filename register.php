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

        <h2> Or if you already have an account, go to the login page </h2>

        <p><input type ="button" value="Go To Login" id="loginBtn"
                  onclick="window.location = 'login.php'"/></p>

    </div>

    <?php

    include ("config.php");

    $username = strip_tags((isset($_POST["username"]) ? $_POST["username"] : ""));
    $password = (isset($_POST["password"]) ? ($_POST["password"]) : "");

//    TODO : Fix positioning, possibly have as alert
    if(($username != "") && checkUsername($conn, $username)){
        $username = "";
        $usernameError = "There is already an account associated with that username, please choose another one.";
        echo "<p id='error'>".$usernameError."</p>";
    }

    $sql = "";

    if($username != "" && $password != "") {
        $sql = "INSERT INTO `user_score` (`username`, `password`, `age`, `ability`, `frequency`, `score`) VALUES ('$username', '$password', '30', '1', '2', '3');";
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

