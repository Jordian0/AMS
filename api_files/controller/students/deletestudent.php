<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Headers
Header('Access-Control-Allow-Origin: *');
Header('Content-Type: application/json');

// Including required files
include_once('../../config/Database.php');
include_once('../../models/Students.php');

// Connecting with database
$database = new Database;
$db = $database->connect();

$students = new Students($db);
$data = json_decode(file_get_contents("php://input"));      // for raw object data


// for form data object
if(count($_POST)) {
//    print_r($_POST);
    if($_POST['course']) {
        $params = [
            'course'=>$_POST['course'],
            'student_id'=>$_POST['student_id']
        ];

        // Deleting student data with specific course
        if($students->destroyStudentCourse($params))
            echo json_encode(['message'=>'Data deleted successfully!']);
        else
            echo json_encode(['message'=>'Value doesn\'t exist']);
    } else {
        $params = [
            'student_id'=>$_POST['student_id']
        ];

        // Deleting student data, checking all 3 tables
        if($students->destroyStudent($params))
            echo json_encode(['message'=>'Data deleted successfully!']);
        else
            echo json_encode(['message'=>'Value doesn\'t exist']);
    }
}
// for raw data object
else if(isset($data)) {
//    print_r($data);
    if(isset($data->course)) {
        $params = [
            'course'=>$data->course,
            'student_id'=>$data->student_id
        ];

        // Deleting student data with specific course
        if($students->destroyStudentCourse($params))
            echo json_encode(['message'=>'Data deleted successfully!']);
        else
            echo json_encode(['message'=>'Value doesn\'t exist!']);
    } else {
        $params = [
            'student_id'=>$data->student_id
        ];

        // Deleting student data, checking all 3 tables
        if($students->destroyStudent($params))
            echo json_encode(['message'=>'Data deleted successfully!']);
        else
            echo json_encode(['message'=>'Value doesn\'t exist!']);
    }
}
else {
    echo json_encode(['message'=>'No data set!']);
}
