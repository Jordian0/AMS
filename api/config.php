<?php

// Database connection details
$host = "localhost:3307";           // port = "3307";  for specific purpose if not default (3306)
$dbname = "attend";
$username = "phpstorm";
$password = "phpstormsql";

ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Database connected successfully";
} catch(PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    die();
}
catch(Exception $e) {
    $output = 'Oops!, something else happened: ' . $e->getMessage();
}

?>
