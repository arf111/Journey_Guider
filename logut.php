<?php
include ('login.php');
global  $connect;
$_SESSION['loggedin'] = false;
$_SESSION['name'] = "";
$_SESSION['id'] = null;

header("location:Home.php");

// session_destroy();
?>
