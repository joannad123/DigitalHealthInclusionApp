<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website Recommender</title>
    <link rel="stylesheet" href="style.css">
    <script src="previous.js"></script>
</head>
<body>
<h1>Listed below are websites which offer support for anyone affected in any way by breast cancer.</h1>
<h2>They are ranked in order of usability, with the most user friendly page at the top.</h2>
<h3>You can view the criteria used to rank these pages by clicking the previous button and selecting<br>
    usability chart from the menu.</h3>
<div class = "cancerMenu">

    <p>1.Breast Cancer Care<br>
        Provides information and support regarding breast cancer<br>
        <a href="https://www.breastcancercare.org.uk/information-support">Visit this website</a></p>

    <p><input type="button" value="Previous" onclick="goBack()"></p>

    <p><input type ="button" value="Logout" id="logout"
              onclick="window.location = 'logout.php'"/></p>
</div>
