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

<p><input type ="button" value="Yes" id="logoutBtn" name="logout" /></p>

<!--TODO : Logout functionality not working.-->

    <?php
        if(isset($_POST['logout'])){
            session_start();
            session_unset();
            session_destroy();
            echo "<p> You have successfully logged out.</p>";
        }
    ?>


</form>
</body>
</html>