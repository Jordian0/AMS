<?php

// start session
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);


if (isset($_POST)) {
    // Retrieve data params
    if($_POST['course-select-d']) {
        $data = array(
            'course' => stripslashes($_POST['course-select-d']),
            'student_id' => stripslashes($_POST['enrollNo-d'])
        );
    }
    else {
        $data = array(
            'student_id' => stripslashes($_POST['enrollNo-d'])
        );
    }

    // API endpoint URL
    $api_url = "http://localhost/api_files/controller/students/deletestudent.php?_method=delete";

    // Convert data into a query string
    $data_string = http_build_query($data);

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);

    // Execute cURL session and get the response
    $response = curl_exec($ch);

    // Output the response
//    echo $response;

    // Check for errors
    if($response === false) {
        echo "cURL Error: " . curl_error($ch);
        $_SESSION['err_message'] = curl_error($ch);
    }
    else {
        $_SESSION['suc_message'] = json_decode($response)->message;
    }

//    echo $_SESSION['suc_message'];
    // Close cURL session
    curl_close($ch);
}

header("Location: ./index.php");

exit;
