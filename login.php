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

    include ("config.php");

    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        $sql = "SELECT id FROM user_score WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

        if($count == 1) {
            $_SESSION['username'] = $username;
            echo "<script>
            alert('You have successfully logged in!');
            window.location.href='age.php';
            </script>";
            exit();
        }else {
            $error = "Your username or password is invalid";
        }
    }

    ?>

    </div>
</form>
</body>
</html>


