<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedDiv = $_POST["selectedDiv"];
    // Process the selected div as needed
    echo "Selected div: " . $selectedDiv;
}
?>
