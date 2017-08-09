<?php
include ('login.php');
global  $connect;
$_SESSION['loggedin'] = false;
$_SESSION['name'] = "";
$_SESSION['id'] = null;
session_destroy();
header("location:Home.php");

// session_destroy();
?>
