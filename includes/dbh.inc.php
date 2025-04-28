<?php
$Servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystemtut";

$conn = mysqli_connect($Servername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: ").mysqli_connect_error();
}