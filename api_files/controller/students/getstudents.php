<?php

// to return students list according to subject

error_reporting(E_ALL);
ini_set('display_error', 1);

// Headers
Header('Access-Control-Allow-Origin: *');
Header('Content-Type: application/json');
Header('Access-Control-Allow-Method: GET');

// Include required files
include_once('../../config/Database.php');
include_once('../../models/Students.php');

// Connecting with database
$database = new Database;
$db = $database->connect();

$students = new Students($db);

if(isset($_GET['subject_id'])) {
    $subject = $_GET['subject_id'];
    // echo $course;

    // checking if group is set or not
    if(isset($_GET['group'])) {
        $group = $_GET['group'];
        // echo $group;
        $data = $students->readStudentsCourseGroup($subject, $group);
    }
    else {
        $data = $students->readStudentCourse($subject);
    }

    $temp = 1;
    if($data->rowCount()) {
        $slist = [];

        // rearrange the students data
        while($row = $data->fetch(PDO::FETCH_OBJ)) {
            $slist[$temp++] = [
                'id' => $row->id,
                'course_name' => $row->course_name,
                'name' => $row->name,
                'student_id' => $row->stid,
                'group' => $row->grp
            ];
        }

        echo json_encode($slist);
    }
    else {
        echo json_encode(['message' => 'No data found!']);
    }
}
