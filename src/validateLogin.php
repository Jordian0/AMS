<?php

session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

// database config
include_once('../api_files/config/Database.php');

$database = new Database;
$conn = $database->connect();

if(isset($_POST['login'])) {
    // login user data
    $userid = trim($_POST['uid']) ?? '';
    $pswdd = trim($_POST['pswd']) ?? '';

    // to remove slashes
    $userid = stripcslashes($userid);
    $pswdd = stripcslashes($pswdd);
    $userid = preg_replace('/\s+/', '', $userid);

//    echo $userid;
//    print('<br>');
//    echo $pswdd;

    $stmt = $conn->query("SELECT password FROM faculty WHERE fid='$userid'");

    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    $hashed_password = $res['password'];

    // Check userid and password existence in defined array */
    if(password_verify($pswdd, $hashed_password)) {
        // Success: Set session variables and redirect to Protected page
        $_SESSION['UserData']['Username'] = $userid;
        header("Location: ../public/timet.php");
        exit;
    } else {
        // Unsuccessful attempt: Set error message
        $_SESSION['error_login'] = true;
        header("Location: ../public/login.php");
        exit;
    }
}
