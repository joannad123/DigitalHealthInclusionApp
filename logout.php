<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form name = "logout" method="post">
<h1>Are you sure you want to logout?</h1>

    <p><button name="logout" type="submit" value="yes" id="logout">Yes</button></p>

    <?php

        if(isset($_POST['logout'])){
            session_start();
            session_unset();
            session_destroy();
            echo "<script>
            alert('You have successfully logged out!');
            window.location.href='index.html';
            </script>";
            exit();
        }
    ?>


</form>
</body>
</html>