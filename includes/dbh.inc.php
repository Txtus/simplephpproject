<?php 

$servername = "localhost";
$dbusername = "root";
$dbpw = "";
$dbname = "website";

$con = mysqli_connect($servername, $dbusername, $dbpw, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());

}
