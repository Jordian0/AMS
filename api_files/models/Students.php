<?php

use OpenApi\Annotations as OA;

// Class to get student data from database
error_reporting(E_ALL);
ini_set('display_error', 1);


/**
 * @OA\Info(title="PDO REST API", version="1.0")
 */


// class for students table
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

    /**
     * @OA\Get(
     *     path="/ATD/api_files/controller/students/getstudents.php",
     *     summary="Method to get students data from particular course and from particular group",
     *     tags={"Students"},
     *     @OA\Parameter(
     *         name="course",
     *         in="query",
     *         required=true,
     *         description="course id passed to get the students data who are registered for the course",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="group",
     *         in="query",
     *         required=false,
     *         description="group passed to get the students with specific course and belongs to particular group",
     *         @OA\Schema(
     *             type="char"
     *         )
     *     ),
     *     @OA\Response(resposne="200", description="Successful"),
     *     @OA\Response(response="404", description="Not Found")
     * )
     */

    // Method to get students data who studies particular course
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

    // method to read students data who study particular course and form particular group
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
