<?php

session_start();

// Destroy started session
session_destroy();

// Redirect to login page
header("Location: ../ATD/index.php");

exit();

?>
