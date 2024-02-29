<?php

// start session
session_start();

// Check if success session variable is set
if (isset($_SESSION['success'])) {
    // Display success message
    echo '<div class="bd-highlight success-m">Form submitted successfully!</div>';

    // Reset the success session variable
    unset($_SESSION['success']);
}

// Checking is ID already exist
if(strpos($_SESSION['sql_message'], 'Duplicate entry') !== false) {
    // Display error message
    echo '<div class="error-m">ID already exists!!</div>';

    // Reset the sql_message variable
    unset($_SESSION['sql_message']);
}
else if (!empty($_SESSION['sql_message'])){
    // Display error message
    echo '<div class="error-m">Error: ' . $_SESSION['sql_message'] .'</div>';

    // Reset the sql_message variable
    unset($_SESSION['sql_message']);
}

