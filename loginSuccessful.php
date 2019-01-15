<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Successful</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>You are logged in as <?php echo $_SESSION["username"] ?>!</h1>

<div class = "button">
    <input type ="button" value="Go to Questionnaire" id="qBtn"
           onclick="window.location = 'age.php'"/>
</div>
</body>
</html>

