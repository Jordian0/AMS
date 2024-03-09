<?php

session_start();

ini_set('display_error', 1);
error_reporting(E_ALL);

if(isset($_POST['select'])) {
    $times = isset($_POST['selectedTime']) ? $_POST['selectedTime'] : '';

    if($times) {
        header("Location: ../src/attend.php");
    }
    else {
        header("Location: ../src/timet.php");
    }
    echo "Selected div: " . $times;
}
?>
