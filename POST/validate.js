function validateForm() {
    let selectInput = document.getElementById('course');
    let selectHelp = document.getElementById('selectHelp');
    let nameInput = document.getElementById('name');
    let nameInHelp = document.getElementById('nameHelp');
    let enrollNoInput = document.getElementById('enrollNo');
    let enrollmentHelp = document.getElementById('enrollmentHelp');

    // Check if any course is selected
    if (selectInput.value.length === 0) {
        // show error
        selectInput.style.setProperty('border-color', 'red', 'important');
        selectHelp.style.cssText = 'display: inline; color: red !important';
        return false;
    } else {
        // Changing color back
        selectInput.style.setProperty('border-color', 'lightgrey', 'important');
        selectHelp.style.setProperty('display', 'none');
    }

    // Check if name field is entered or not
    if (nameInput.value.length === 0) {
        // Show error
        nameInput.style.cssText = 'border-color: red !important';
        nameInHelp.style.cssText = 'display: inline; color: red !important';
        // Prevent form submission
        return false;
    } else {
        // Changing color back
        nameInput.style.cssText = 'border-color: lightgrey !important';
        nameInHelp.style.cssText = 'display: none';
    }

    // Check if the length of the id input is not equal to 12
    if (enrollNoInput.value.length !== 12) {
        // Show the enrollment help message
        enrollNoInput.style.setProperty('border-color', 'red');
        enrollmentHelp.style.setProperty('color', 'red', 'important');
        // Prevent form submission
        return false;
    } else {
        // Hide the enrollment help message
        enrollNoInput.style.setProperty('border-color', 'lightgrey');
        enrollmentHelp.style.setProperty('color', 'green', 'important');
        // Allow form submission
        return true;
    }
}
