<?php

// to read the time table for particular day

error_reporting(E_ALL);
ini_set('display_error', 1);

// Headers
Header('Access-Control-Allow-Origin: *');
Header('Content-Type: application/json');
Header('Access-Control-Allow-Method: POST');

// Including required files
include_once('../../config/Database.php');
include_once('../../models/TimeSlot.php');

// Connecting with database
$database = new Database;
$db = $database->connect();

$timeslot = new TimeSlot($db);

$data = $timeslot->readTable();

// If there is class in database
if($data->rowCount()) {
    $tslots = [];
    $temp = 1;

    // rearrange the data
    while($row = $data->fetch(PDO::FETCH_OBJ)) {
        $tslots[$temp++] = [
            'stime' => $row->stime,
            'etime' => $row->etime,
            'course_id' => $row->course_id,
            'course' => $row->course,
            'faculty' => $row->name,
            'grp' => $row->grp,
            'room_no' => $row->room_no,
        ];
    }

    echo json_encode($tslots);
}
else {
    echo json_encode(['message' => 'No data found']);
}
