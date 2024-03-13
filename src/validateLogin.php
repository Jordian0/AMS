<?php

session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);


if(isset($_POST['login'])) {
    /* Define username and associated password array */
    $logins = array('Alex' => 12345678,'Nomad' => 98765432);

    // login user data
    $userid = isset($_POST['uid']) ? $_POST['uid'] : '';
    $pswdd = isset($_POST['pswd']) ? $_POST['pswd'] : '';
    // to remove slashes
    $userid = stripcslashes($userid);
    $pswdd = stripcslashes($pswdd);
    $userid = preg_replace('/\s+/', '', $userid);

//    echo $userid;
//    print('<br>');
//    echo $pswdd;

    // Check userid and password existence in defined array */
    if(isset($logins[$userid]) && $logins[$userid] == $pswdd){
        // Success: Set session variables and redirect to Protected page
        $_SESSION['UserData']['Username']=$logins[$userid];
        header("Location: ../public/timet.php");
        exit;
    } else {
        // Unsuccessful attempt: Set error message
        $_SESSION['error_login'] = true;
        header("Location: ../public/login.php");
        exit;
    }
}


