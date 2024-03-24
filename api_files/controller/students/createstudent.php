<?php

error_reporting(E_ALL);
ini_set('display_error', 1);

// Headers
Header('Access-Control-Allow-Origin: *');
Header('Content-Type: application/json');
Header('Access-Control-Allow-Method: POST');

// Including required files
include_once('../../config/Database.php');
include_once('../../models/Students.php');

// Connecting with database
$database = new Database;
$db = $database->connect();

$students = new Students($db);
$data = json_decode(file_get_contents("php://input"));              // for raw object data

// for form data
if(count($_POST)) {
//    print_r($_POST);

    // creating new student info for user input
    $params = [
        'course_id' => $_POST['course'],
        'name' => $_POST['name'],
        'student_id' => $_POST['student_id'],
        'group' => $_POST['group']
    ];

    if($students->createStudent($params)) {
        echo json_encode(['message' => 'Data posted successfully!']);
    } else {
        echo json_encode(['message' => 'Data already exist!']);
    }
}
// for raw data object
else if(isset($data)) {
//    print_r($data);

    // creating new student info for user input
    $params = [
        'course_id' => $data->course,
        'name' => $data->name,
        'student_id' => $data->student_id,
        'group' => $data->group
    ];

    if($students->createStudent($params)) {
        echo json_encode(['message' => 'Data posted successfully!']);
    } else {
        echo json_encode(['message' => 'Data already exist!']);
    }
}
