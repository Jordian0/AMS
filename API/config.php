<?php

$host = "localhost";
$dbname = "attend";
$username = "phpstorm";
$password = "phpstormsql";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

?>
