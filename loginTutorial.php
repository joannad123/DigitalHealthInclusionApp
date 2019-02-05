<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Tutorial</title>
    <link rel="stylesheet" href="style.css">
    <script src="slideshow.js"></script>
</head>
<body>
<h1> Login Tutorial </h1>

<div class="slideshow-container">

    <div class="mySlides" style="display: block;">
        <p id="slides"><h1>What is a login?</h1></p>
        <p id="slides">Logins are used to identify users.</p>
        <p id="slides">It involves storing your username and password in a database.</p>
        <p id="slides">It means if you want to use the app frequently, your settings etc are stored.</p>
        <p id="slides">For example, in this app if you logout and log back in your quiz scores are still the same<br>
                        because they have been saved.</p>
    </div>

    <div class="mySlides">
        <p id="slides"><h1>What is a username?</h1></p>
        <p id="slides">The name given to a user on a computer.</p>
        <p id="slides">An example of a username for someone with the name John Smith would be :</p>
        <p id="slides">JSmith123</p>
    </div>

    <div class="mySlides">
        <p id="slides"><h1>What is a password?</h1></p>
        <p id="slides">A set of secret characters or words used to authenticate access to a digital system.</p>
        <p id="slides">Strong passwords contain a mixture of numbers, other characters and both upper and lower case characters.</p>
        <p id="slides">Weak passwords are easy to remember so may include names, birth dates or phone numbers.</p>
        <p id="slides">An example of a strong password is : 1SecreT!2</p>
        <p id="slides">An example of a weak password is : secret</p>
    </div>

    <div class="mySlides">
        <p id="slides"><h1>How to register</h1></p>
        <p id="slides">1. Enter a username and password which you will remember.</p>
        <p id="slides">2. Click the submit button.</p>
        <p id="slides">As long as the username you have chosen is available, you will be redirected to the login page.</p>
        <p id="slides"><img src="images/register.png" alt="Register form"></p>
    </div>

    <div class="mySlides">
        <p id="slides"><h1>How to login</h1></p>
        <p id="slides">1. Enter your username and password.</p>
        <p id="slides">2. Click the submit button.</p>
        <p id="slides">As long as your username and password are correct, you will be redirected to the first question.</p>
        <p id="slides"><img src="images/register.png" alt="Login form"></p>
    </div>

    <a href="#" class="previous" onclick="plusSlides(-1)">&laquo; Previous</a>
    <a href="#" class="next" onclick="plusSlides(1)">Next &raquo;</a>

</div>

<div>

    <p align="center"> Click the left and right arrows to navigate through the information.<br>
                       Once you are comfortable, click the button below to go to the register page.</p>

    <p><input type ="button" value="Go To Register" id="loginTutBtn"
              onclick="window.location = 'register.php'"/>
</div>



</body>
</html>

