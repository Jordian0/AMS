<?php

use OpenApi\Annotations as OA;

error_reporting(E_ALL);
ini_set('display_error', 1);


/**
 * @OA\Info(title="PDO REST API", version="1.0")
 */


// class for timetable table
class TimeSlot {

    // Subjects properties
    public $day;
    public $tid;

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

    /**
     * @OA\Get(
     *     path="/ATD/api_files/controller/timetable/readtime.php",
     *     summary="Gets all the classes that are today",
     *     tags={"Time table"},
     *     @OA\Response(response="200", description="Successful"),
     *     @OA\Response(response="404", description="Not Found!")
     * )
     */
    // Method to read all the saved subjects from database
    public function readTable() {
        $today = date('l');
        $this->day = $this->days[$today];
//        echo $this->day;

        // Query for reading timetable table
        $query = '
            SELECT 
                tt.tid,
                timeframe.stime,
                timeframe.etime,
                tt.subject_id,
                subjects.subject_name as subject,
                faculty.name,
                tt.grp,
                tt.room_no
            FROM
                '.$this->table.' tt
            LEFT JOIN
                timeframe ON tt.tid = timeframe.tid
            LEFT JOIN
                subjects ON tt.subject_id = subjects.subject_id
            LEFT JOIN
                faculty ON tt.fid = faculty.fid
            WHERE
                tt.day = ?
            ORDER BY tt.tid
        ';

        $times= $this->connection->prepare($query);
        $times->bindValue(1, $this->day, PDO::PARAM_INT);
        $times->execute();

        return $times;
    }

    /**
     * @OA\Get(
     *     path="/ATD/api_files/controller/timetable/readsubject.php",
     *     summary="Method to read a single subject info",
     *     tags={"Time table"},
     *     @OA\Parameter(
     *          name="id",
     *          in="query",
     *          required=true,
     *          description="Pass the id to get the info about the particular class in a day",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Response(response="200", description="Successful"),
     *     @OA\Response(response="404", description="Not Found!")
     * )
     */
    // Method to read one subjects from database
    public function readSubject($tid) {
        $today = date('l');
        $this->day = $this->days[$today];
//        $this->day = 2;
        $this->tid = $tid;

        // Query for reading timetable table
        $query = '
            SELECT 
                tt.tid,
                timeframe.stime,
                timeframe.etime,
                tt.subject_id,
                subjects.subject_name as subject,
                faculty.name,
                tt.grp,
                tt.room_no
            FROM
                '.$this->table.' tt
            LEFT JOIN
                timeframe ON tt.tid = timeframe.tid
            LEFT JOIN
                subjects ON tt.subject_id = subjects.subject_id
            LEFT JOIN
                faculty ON tt.fid = faculty.fid
            WHERE
                tt.day = ? AND tt.tid=?
        ';

        $times= $this->connection->prepare($query);
        $times->bindValue(1, $this->day, PDO::PARAM_INT);
        $times->bindValue(2, $this->tid, PDO::PARAM_INT);
        $times->execute();

        return $times;
    }
}
