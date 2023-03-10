<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "php_dasar";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
  die("Error connecting to database");
}
