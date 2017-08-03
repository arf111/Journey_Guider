<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineDB";
// Create connection

$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    //echo "Connected successfully" . "<br >";
}
?>