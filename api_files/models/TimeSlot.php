<?php

error_reporting(E_ALL);
ini_set('display_error', 1);

// class for subjects table
class TimeSlot {

    // Subjects properties
    public $day;

    // Database Data
    private $connection;
    private $table = 'timetable';

    // days array
    public $days = array(
        "Monday" => 1,
        "Tuesday" => 2,
        "Wednesday" => 3,
        "Thursday" => 4,
        "Friday" => 5,
        "Saturday" => 6,
        "Sunday" => 7
    );


    // constructor
    public function __construct($db) {
        $this->connection = $db;
//        echo "Success!";
    }

    // Method to read all the saved subjects from database
    public function readTable() {
        $today = date('l');
        $this->day = $this->days[$today];
//        echo $this->day;

        // Query for reading timetable table
        $query = '
            SELECT 
                timeframe.stime,
                timeframe.etime,
                tt.course_id,
                subjects.course_name as course,
                subjects.faculty,
                tt.grp,
                tt.room_no
            FROM
                '.$this->table.' tt
            LEFT JOIN
                timeframe ON tt.tid = timeframe.tid
            LEFT JOIN
                subjects ON tt.course_id = subjects.course_id
            WHERE
                tt.day = '.$this->day.'
        ';

        $times= $this->connection->prepare($query);
        $times->execute();

        return $times;
    }

}
