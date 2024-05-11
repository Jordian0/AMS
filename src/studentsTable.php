<?php
session_start();

$data = $_SESSION['students'];
//print_r($data);

// Associative array to store unique course names
$uniqueCourseNames = array();
// finding unique courses in the data
foreach ($data as $student) {
    // Extract the course name
    $courseName = $student['course_name'];

    // Store the course name as a key in the associative array.
    $uniqueCourseNames[$courseName] = true;
}
// Extract unique course names
$uniqueCourseNames = array_keys($uniqueCourseNames);


// iterating over courses
foreach($uniqueCourseNames as $course) {
    echo '<div class="div-block">'.$course.'</div>';
    echo '<table class="table table-bordered table-hover">';
    echo '<thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Student Name</th>
                <th scope="col">Student ID</th>
                <th scope="col"></th>
            </tr>
          </thead>';
    echo '<tbody class="table-hover">';

    $count = 1;
    // iterating over students
    foreach($data as $student) {
        if($course === $student['course_name']) {
//            print_r($student);
            echo '<tr>';
            echo '<td>'.$count++.'</td>';
            echo '<td>'.$student['name'].'</td>';
            echo '<td>'.$student['student_id'].'</td>';
            echo("</tr>");
        }
    }

    echo '</tbody>';
    echo '</table>';
}



?>
