<?php

// Class to get student data from database

error_reporting(E_ALL);
ini_set('display_error', 1);

// class for timetable table
class Students {
    // timetable properties
    public $course_id;
    public $grp;

    // Database Data
    private $connection;
    private $table = 'sub_course';


    // constructor
    public function __construct($db) {
        $this->connection = $db;
//        echo "Success!";
    }

    public function readStudentCourse($course) {
        $this->course_id = $course;
//        echo $this->course_id;

        $query = '
            SELECT
                *
            FROM
                '.$this->table.'
            JOIN
                mca_cc ON sub_course.course = \'mca_cc\'
            WHERE
                course_id =?
            UNION ALL
            SELECT *
                FROM sub_course
            JOIN
                mca_dop ON sub_course.course = \'mca_dop\'
            WHERE
                course_id =?
            UNION ALL
            SELECT *
                FROM sub_course
            JOIN
                mca_ai ON sub_course.course = \'mca_ai\'
            WHERE
                course_id =?
        ';

        $students = $this->connection->prepare($query);
        $students->bindValue(1, $this->course_id, PDO::PARAM_STR);
        $students->bindValue(2, $this->course_id, PDO::PARAM_STR);
        $students->bindValue(3, $this->course_id, PDO::PARAM_STR);
        $students->execute();

        return $students;
    }

    // method to read all the rows from the database
    public function readStudentsCourseGroup($course, $group) {
        $this->course_id = $course;
        $this->grp = $group;
//         echo $this->course_id,$this->grp;

        // Query for reading timetable table
        $query = '
            SELECT
                *
            FROM
                '.$this->table.' sub_course
            JOIN
                mca_cc ON sub_course.course = \'mca_cc\'
            WHERE
                course_id=? AND grp=?
            UNION ALL
            SELECT *
                FROM sub_course
            JOIN
                mca_dop ON sub_course.course = \'mca_dop\'
            WHERE
                course_id=? AND grp=?
            UNION ALL
            SELECT *
                FROM sub_course
            JOIN
                mca_ai ON sub_course.course = \'mca_ai\'
            WHERE
                course_id=? AND grp=?
        ';

        $students = $this->connection->prepare($query);
        $students->bindValue(1, $this->course_id, PDO::PARAM_STR);
        $students->bindValue(2, $this->grp, PDO::PARAM_STR);
        $students->bindValue(3, $this->course_id, PDO::PARAM_STR);
        $students->bindValue(4, $this->grp, PDO::PARAM_STR);
        $students->bindValue(5, $this->course_id, PDO::PARAM_STR);
        $students->bindValue(6, $this->grp, PDO::PARAM_STR);
        $students->execute();

        return $students;
    }
}
