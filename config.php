<?php

$host = "devweb2018.cis.strath.ac.uk";
$user = "wjb15159";
$pass = "vahm0Iez4eex";
$dbname = "wjb15159";
$conn = new mysqli($host, $user, $pass, $dbname);

if($conn->connect_error) {
    die("Connection failed".$conn->connect_error);
}

?>