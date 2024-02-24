<!DOCTYPE html>
<html lang="en">
<head>
    <title>php</title>
</head>
<body>

<?php

// Database connection details (replace with your actual information)
$db_host = "localhost";
$db_name = "attend";
$db_user = "phpstorm";
$db_password = "phpstormsql";
echo($db_user);
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Establish connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve selected table name
$selected_table = $_POST['course-select'];

// Prepare data
$name = $_POST['name'];
$enrollNo = $_POST['enrollNo'];

// SQL statements
$sql = "INSERT INTO `$selected_table` ('name', 'stid') VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $name, $enrollNo);


// Execute query and handle errors
if(!$stmt->execute()) {
    echo "Error: " . $stmt->error;
} else {
    echo "Data inserted successfully into table `$selected_table`!";
}

// Close connection
$stmt->close();
$conn->close();

?>

</body>
</html>
