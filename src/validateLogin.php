<?php

session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);


if(isset($_POST['login'])) {
    /* Define username and associated password array */
    $logins = array('Alex' => 123456,'Nomad' => 987654);

    // login user data
    $userid = isset($_POST['uid']) ? $_POST['uid'] : '';
    $otpp = isset($_POST['otp']) ? $_POST['otp'] : '';
    // to remove slashes
    $userid = stripcslashes($userid);
    $otpp = stripcslashes($otpp);
    $userid = preg_replace('/\s+/', '', $userid);

//    echo $userid;
//    print('<br>');
//    echo $otpp;

    // Check userid and otpp existence in defined array */
    if(isset($logins[$userid]) && $logins[$userid] == $otpp){
        // Success: Set session variables and redirect to Protected page
        $_SESSION['UserData']['Username']=$logins[$userid];
        header("Location: ../public/timet.php");
        exit;
    } else {
        // Unsuccessful attempt: Set error message
        $_SESSION['error_login'] = true;
        header("Location: ../index.php");
        exit;
    }
}


