<?php
error_reporting(0);
$dbhost = "localhost";
$dbuser = "login";
$dbpwd = "123456";
$dbname = "login";

$con = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
if (!$con) {
    die("error: " . mysqli_connect_error());
}

?>
