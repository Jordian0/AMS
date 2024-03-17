<?php
session_start();

// If user logged out and still trying to access the page
if(!isset($_SESSION['UserData'])){
    header("location: ../public/login.php");
    exit;
}

if(isset($_SESSION['time-id'])) {
    $timeid = $_SESSION['time-id'];
}
?>
