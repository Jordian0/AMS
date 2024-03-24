<?php

use OpenApi\Annotations as OA;

// Class to get student data from database
error_reporting(E_ALL);
ini_set('display_errors', 1);


/**
 * @OA\Info(title="PDO REST API", version="1.0")
 */


// class for students table
class Students {
    // timetable properties
    public $subject_id;
    public $course_id;
    public $name;
    public $stid;
    public $grp;
    public $ai = 'mca_ai';
    public $cc = 'mca_cc';
    public $dop = 'mca_dop';

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
     *         name="subject_id",
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
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(response="200", description="Successful"),
     *     @OA\Response(response="404", description="Not Found")
     * )	
     */

    // Method to get students data who studies particular course
    public function readStudentCourse($subject_id) {
        $this->subject_id = $subject_id;
//        echo $this->subject_id;

        $query = '
            SELECT
                sub_course.id,
                course.course_name,
                mca_cc.name,
                mca_cc.stid,
                mca_cc.grp
            FROM
                '.$this->table.' sub_course
            LEFT JOIN
                course ON sub_course.course_id = course.course_id
            JOIN
                mca_cc ON sub_course.course_id = \'mca_cc\'
            WHERE
                subject_id =?
            UNION ALL
            SELECT
                sub_course.id,
                course.course_name,
                mca_dop.name,
                mca_dop.stid,
                mca_dop.grp
            FROM
                '.$this->table.' sub_course
            LEFT JOIN
                course ON sub_course.course_id = course.course_id
            JOIN
                mca_dop ON sub_course.course_id = \'mca_dop\'
            WHERE
                subject_id =?
            UNION ALL
            SELECT
                sub_course.id,
                course.course_name,
                mca_ai.name,
                mca_ai.stid,
                mca_ai.grp
            FROM
                '.$this->table.' sub_course
            LEFT JOIN
                course ON sub_course.course_id = course.course_id
            JOIN
                mca_ai ON sub_course.course_id = \'mca_ai\'
            WHERE
                subject_id =?
        ';

        $students = $this->connection->prepare($query);
        $students->bindValue(1, $this->subject_id, PDO::PARAM_STR);
        $students->bindValue(2, $this->subject_id, PDO::PARAM_STR);
        $students->bindValue(3, $this->subject_id, PDO::PARAM_STR);
        $students->execute();

        return $students;
    }

    // method to read students data who study particular course and form particular group
    public function readStudentsCourseGroup($subject_id, $group) {
        $this->subject_id = $subject_id;
        $this->grp = $group;
//         echo $this->subject_id,$this->grp;

        // Query for reading timetable table
        $query = '
            SELECT
                sub_course.id,
                course.course_name,
                mca_cc.name,
                mca_cc.stid,
                mca_cc.grp
            FROM
                '.$this->table.' sub_course
            LEFT JOIN
                course ON sub_course.course_id = course.course_id
            JOIN
                mca_cc ON sub_course.course_id = \'mca_cc\'
            WHERE
                subject_id=? AND grp=?
            UNION ALL
            SELECT 
                sub_course.id,
                course.course_name,
                mca_dop.name,
                mca_dop.stid,
                mca_dop.grp
            FROM 
                '.$this->table.' sub_course
            LEFT JOIN 
                course ON sub_course.course_id = course.course_id
            JOIN
                mca_dop ON sub_course.course_id = \'mca_dop\' 
            WHERE
                subject_id=? AND grp=?
            UNION ALL
            SELECT  
                sub_course.id,
                course.course_name,
                mca_ai.name,
                mca_ai.stid,
                mca_ai.grp
            FROM 
                '.$this->table.' sub_course
            LEFT JOIN
                course ON sub_course.course_id = course.course_id
            JOIN
                mca_ai ON sub_course.course_id = \'mca_ai\'
            WHERE
                subject_id=? AND grp=?
        ';

        $students = $this->connection->prepare($query);
        $students->bindValue(1, $this->subject_id, PDO::PARAM_STR);
        $students->bindValue(2, $this->grp, PDO::PARAM_STR);
        $students->bindValue(3, $this->subject_id, PDO::PARAM_STR);
        $students->bindValue(4, $this->grp, PDO::PARAM_STR);
        $students->bindValue(5, $this->subject_id, PDO::PARAM_STR);
        $students->bindValue(6, $this->grp, PDO::PARAM_STR);
        $students->execute();

        return $students;
    }


    /**
     * @OA\Post(
     *     path="/ATD/api_files/controller/students/createstudent.php",
     *     summary="Method to insert a student info",
     *     tags={"Students"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="course_id",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="name",
     *                     type="string",
     *                 ),
     *                 @OA\Property(
     *                     property="student_id",
     *                     type="string",
     *                 ),
     *                 @OA\Property(
     *                     property="group",
     *                     type="string",
     *                 ),
     *             ),
     *         ),
     *         @OA\MediaType(
     *             mediaType="json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="course_id",
     *                     type="string",
     *                 ),
     *                 @OA\Property(
     *                     property="name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="student_id",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="group",
     *                     type="string"
     *                 ),
     *             ),
     *         )
     *     ),
     *     @OA\Response(response="200", description="Successful"),
     *     @OA\Response(response="404", description="Not Found")
     * )
     */
    // Method to post the data into the student database
    public function createStudent($params): bool
    {
        try {
            // assigning values
            $this->course_id = $params['course_id'];
            $this->name = $params['name'];
            $this->stid = $params['student_id'];
            $this->grp = $params['group'];

            // Query to store new student info in database
            $query = '
                INSERT INTO '.$this->course_id.' (name, stid, grp)
                SELECT :name, :studentid, :group
                FROM DUAL
                WHERE NOT EXISTS (
                            SELECT stid FROM mca_ai WHERE stid = :studentid
                    UNION ALL
                    SELECT stid FROM mca_cc WHERE stid = :studentid
                    UNION ALL
                    SELECT stid FROM mca_dop WHERE stid = :studentid
                )
            ';

            $students = $this->connection->prepare($query);

            // binding values
            $students->bindValue('name', $this->name, PDO::PARAM_STR);
            $students->bindValue('studentid', $this->stid, PDO::PARAM_STR);
            $students->bindValue('group', $this->grp, PDO::PARAM_STR);

            // executing and checking if it made any changes in the table or not
            if($students->execute() && $students->rowCount() > 0)
                return true;

            return false;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    /**
     * @OA\Delete(
     *     path="/ATD/api_files/controller/students/deletestudent.php",
     *     summary="Method to destroy student info",
     *     tags={"Students"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="student_id",
     *                     type="string",
     *                     description="Student id whose data is to be deleted",
     *                      required=true
     *                 ),
     *                 @OA\Property(
     *                     property="course_id",
     *                     type="string",
     *                     description="Optional: course which student belongs to",
     *                 )
     *             ),
     *         ),
     *          @OA\MediaType(
     *              mediaType="json",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="student_id",
     *                      type="string",
     *                      description="Student id whose data is to be deleted",
     *                  ),
     *                  @OA\Property(
     *                      property="course_id",
     *                      type="string",
     *                      description="Optional: course which student belongs to",
     *                  ),
     *              ),
     *          ),
     *     ),
     *     @OA\Response(response="200", description="Successful"),
     *     @OA\Response(response="404", description="Not Found")
     * )
     */
    // Method to delete student data from student table, student course  provided
    public function destroyStudentCourse($params): bool
    {
        try {
            // assigning values
            $this->course_id = $params['course_id'];
            $this->stid = $params['student_id'];

            // Query for updating existing record
            $query = '
                DELETE FROM '.$this->course_id.'
                WHERE stid=:studentid
            ';

            $students = $this->connection->prepare($query);

            // binding values
            $students->bindValue('studentid', $this->stid, PDO::PARAM_STR);

            // executing query
            if($students->execute() && $students->rowCount()>0) {
                return true;
            }

            return false;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    // Method to delete student data from student table
    public function destroyStudent($params): bool
    {
        try {
            // assigning value
            $this->stid = $params['student_id'];

            // Query for updating existing record
            $query = '
                    DELETE FROM mca_ai WHERE stid=:studentid
                    OR stid IN (SELECT stid FROM mca_cc WHERE stid=:studentid)
                    OR stid IN (SELECT stid FROM mca_dop WHERE stid=:studentid)
            ';

            $students = $this->connection->prepare($query);

            // binding values
            $students->bindValue('studentid', $this->stid, PDO::PARAM_STR);

            // executing query
            if($students->execute() && $students->rowCount()) {
                return true;
            }

            return false;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
