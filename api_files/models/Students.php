<?php

error_reporting(E_ALL);
ini_set('display_error', 1);

// class for timetable table
class Students {
    // timetable properties
    public $day;
    public $tid;
    public $course_id;
    public $grp;
    public $room_no;

    // Database Data
    private $connection;
    private $table = 'sub_course';


    // constructor
    public function __construct($db) {
        $this->connection = $db;
    }

    public function set($day, $tid, $course_id, $grp, $room_no) {
        $this->day = $day;
        $this->tid = $tid;
        $this->course_id = $course_id;
        $this->grp = $grp;
        $this->room_no = $room_no;
    }

    // method to read all the rows from the database
    public function readStudents() {
        // Query for reading timetable table
        $query = '
            SELECT
                *
            FROM
                '.$this->table.'  
            JOIN
                mca_ai ON sub_course.course = mca_cc
            WHERE
                course_id = CSU271
            UNION ALL
            SELECT *
                FROM sub_course
            JOIN
                mca_dop ON sub_course.course = mca_dop
            WHERE
                course_id = CSU271
            UNION ALL
            SELECT *
                FROM sub_course
            JOIN
                mca_ai ON sub_course.course = mca_ai
            WHERE
                course_id = CSU271
        ';
    }
}
