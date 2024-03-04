<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Attend Status</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--</body>-->
<!--</html>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Div</title>
    <style>
        .selectable {
            border: 2px solid #ccc;
            margin: 10px;
            padding: 20px;
            cursor: pointer;
        }
        .selected {
            border-color: blue;
        }
    </style>
</head>
<body>

<form action="process.php" method="post" id="selectForm">
    <input type="hidden" id="selectedDiv" name="selectedDiv">
    <div class="selectable" id="div1" onclick="selectDiv('div1')">Div 1</div>
    <div class="selectable" id="div2" onclick="selectDiv('div2')">Div 2</div>
    <div class="selectable" id="div3" onclick="selectDiv('div3')">Div 3</div>
    <!-- Add more divs as needed -->

    <button type="submit">Submit</button>
</form>

<script>
    function selectDiv(divId) {
        // Remove 'selected' class from all divs
        var divs = document.querySelectorAll('.selectable');
        divs.forEach(function(div) {
            div.classList.remove('selected');
        });

        // Add 'selected' class to the clicked div
        var selectedDiv = document.getElementById(divId);
        console.log(divId);
        selectedDiv.classList.add('selected');

        // Set the value of the hidden input field
        document.getElementById('selectedDiv').value = divId;
    }
</script>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedDiv = $_POST["selectedDiv"];
    // Process the selected div as needed
    echo "Selected div: " . $selectedDiv;
}
?>
