<?php

// to return the specific time period selected

error_reporting(E_ALL);
ini_set('display_error', 1);

// Headers
Header('Access-Control-Allow-Origin: *');
Header('Content-Type: application/json');
Header('Access-Control-Allow-Method: POST');

// Include required files
include_once('../../config/Database.php');
include_once('../../models/TimeSlot.php');

// Connecting with database
$database = new Database;
$db = $database->connect();

$timeslot = new TimeSlot($db);

if(isset($_GET['id'])) {
//     echo $_GET['id'];
    $data = $timeslot->readSubject($_GET['id']);

    if($data->rowCount()) {
        $subject = [];

        // rearrange the subject data
        while($row = $data->fetch(PDO::FETCH_OBJ)) {
            $subject[$row->tid] =[
                'tid' => $row->tid,
                'stime' => $row->stime,
                'etime' => $row->etime,
                'course_id' => $row->course_id,
                'course' => $row->course,
                'faculty' => $row->faculty,
                'grp' => $row->grp,
                'room_no' => $row->room_no,
            ];
        }

        echo json_encode($subject);
    }
    else {
        echo json_encode(['message' => 'No data found!']);
    }
}
