<?php

session_start();

ini_set('display_error', 1);
error_reporting(E_ALL);

if(isset($_POST['select'])) {
    $times = isset($_POST['selectedTime']) ? $_POST['selectedTime'] : '';
//    echo "Selected div: " . $times;

    if($times) {
        // get last digit to get time id.
        $_SESSION['time-id'] = substr($times, -1);
        header("Location: ../public/attend.php");
        exit;
    }
    else {
        header("Location: ../public/timet.php");
        exit;
    }
}
?>
