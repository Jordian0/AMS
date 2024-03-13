<?php

session_start();

if (isset($_SESSION)) {
    // Destroy the session
    session_destroy();
}

// Redirect to login page
header("Location: ../ATD/public/login.php");

exit;
?>
