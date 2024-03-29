<?php

session_start();

ini_set('display_error', 1);
error_reporting(E_ALL);

// Get the data sent from JavaScript
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data)) {
    // adding attendance key to the json data
    foreach ($data as &$student) {
        $student['attendance'] = 0;
    }

//    echo json_encode($data);
    echo "Success!";
}
else {
    echo "Value not set!";
}

$_SESSION['students'] = $data;

exit;
