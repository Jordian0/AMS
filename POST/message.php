<?php

// start session
session_start();

// Check if success session variable is set
if (isset($_SESSION['suc_message'])) {
    // Checking if data is posted or not(for post page)
    if(str_contains($_SESSION['suc_message'], 'posted successfully')) {
        echo '<div class="success-m">'.$_SESSION['suc_message'].'</div>';
    }
    else if(str_contains($_SESSION['suc_message'], 'already exist')) {
        echo '<div class="error-m">'.$_SESSION['suc_message'].'</div>';
    }

    // Checkign if data is delete or not (for delete page)
    if(str_contains($_SESSION['suc_message'], 'deleted successfully')) {
        echo '<div class="success-m">'.$_SESSION['suc_message'].'</div>';
    }
    else if(str_contains($_SESSION['suc_message'], 'doesn\'t exist')) {
        echo '<div class="error-m">'.$_SESSION['suc_message'].'</div>';
    }

    // Reset the success session variable
    unset($_SESSION['suc_message']);
}
// Check if error session variable is set
if (isset($_SESSION['err_message'])) {
    echo '<div class="error-m">'.$_SESSION['err_message'].'</div>';

    // reset the error session variable
    unset($_SESSION['err_message']);
}
