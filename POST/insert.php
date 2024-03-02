<?php

// Starting session
session_start();

// Database connection details
$db_host = "localhost";
$db_name = "attend";
$db_user = "phpstorm";
$db_password = "phpstormsql";

ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
    // Establish connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve selected table name
    $selected_table = $_POST['course-select'];

    // Prepare data
    $name = $_POST['name'];
    $enrollNo = $_POST['enrollNo'];

    // to prevent from sql injection
    $name = stripcslashes($name);
    $enrollNo = stripcslashes($enrollNo);

    // SQL statements
    $sql = "INSERT INTO `$selected_table` (`name`, `stid`) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $enrollNo);


    // Execute query and handle errors
    if (!$stmt->execute()) {
        echo "Error executing query: " . $stmt->error;
    } else {
        echo "Data inserted successfully into table `$selected_table`!";
    }

    // Close connection
    $stmt->close();
    $conn->close();

    // Set session variable for success message
    $_SESSION['success'] = true;
}
catch (mysqli_sql_exception $e) {
    // Handle mysqli_sql_exception
    echo "Error: " . $e->getMessage();

    // Set session variable for error message
    $_SESSION['sql_message'] = $e->getMessage();
}
catch (Exception $e) {
    // Handle other exceptions
    echo "Error: " . $e->getMessage();

    // Set session variable for error message
    $_SESSION['sql_message'] = $e->getMessage();
}

header("Location: index.php");

exit();
