<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Please enter your username and password</h1>

<form name="login" method="post">

    <div class="login">
        <p>Username</p>
        <input type="text" name="username">

        <p>Password</p>
        <input type="password" name="password">

        <p><input type="submit" name="submit"></p>


    </div>

    <?php

    include("config.php");

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT id FROM user_score WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

        if ($count == 1) {

            $_SESSION['username'] = $username;
            $sqlUpdate = "UPDATE user_score SET logincount = logincount + 1 WHERE username='$username'";
            $resultUpdate = $conn->query($sqlUpdate);

            $sqlLogin = "SELECT logincount FROM `user_score` WHERE `username` = '$username' AND `logincount` > '1'";
            $resultLogin = $conn->query($sqlLogin);

            if ($resultLogin->num_rows > 0) {
                $sqlScore = "SELECT score FROM `user_score` WHERE `username` = '$username' AND `score` = '1'";
                $resultScore = $conn->query($sqlScore);

                if ($resultScore->num_rows > 0) {
                    echo "<script>
                    alert('You have logged in successfully.');
                    window.location.href='basicMenu.php';
                    </script>";
                } else {
                    $sqlScore = "SELECT score FROM `user_score` WHERE `username` = '$username' AND `score` = '2'";
                    $resultScore = $conn->query($sqlScore);

                    if ($resultScore->num_rows > 0) {
                        echo "<script>
                    alert('You have logged in successfully.');
                    window.location.href='advancedMenu.php';
                    </script>";
                    }
                }
            } else {
                echo "<script>
                    alert('You have logged in successfully.');
                    window.location.href='age.php';
                    </script>";
            }
        }
    }


    ?>

    </div>
</form>
</body>
</html>


