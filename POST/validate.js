// Function to toggle b/w registration and delete
var currentDivId = 'insert-i';
function toggleDivs(divId) {
    const btn1 = document.getElementById('insert-i');
    const btn2 = document.getElementById('delete-d');
    const div1 = document.getElementById('register-stu');
    const div2 = document.getElementById('delete-stu');

    if(divId !== currentDivId) {
        // Toggle the display of divs
        div1.style.display = (divId === 'insert-i') ? 'block' : 'none';
        div2.style.display = (divId === 'delete-d') ? 'block' : 'none';

        // Change CSS properties based on the div to be displayed
        if(divId === 'insert-i') {
            btn1.classList.add('active-d');
            btn1.classList.remove('deactive-d');
            btn2.classList.add('deactive-d');
            btn2.classList.remove('active-d');
            btn2.classList.add('div-button-hover');
            btn1.classList.remove('div-button-hover');
        }
        else {
            btn2.classList.add('active-d');
            btn2.classList.remove('deactive-d');
            btn1.classList.add('deactive-d');
            btn1.classList.remove('active-d');
            btn1.classList.add('div-button-hover');
            btn2.classList.remove('div-button-hover');
        }

        currentDivId = divId;
    }
}

// Validating register form
function validateFormR() {
    let selectInput = document.getElementById('course-r');
    let selectHelp = document.getElementById('selectHelp-r');
    let nameInput = document.getElementById('name-r');
    let nameInHelp = document.getElementById('nameHelp-r');
    let groupInput = document.getElementById('group-r');
    let groupHelp = document.getElementById('groupHelp-r');
    let enrollNoInput = document.getElementById('enrollNo-r');
    let enrollmentHelp = document.getElementById('enrollmentHelp-r');

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

    // Check if group field is entered or not
    if(groupInput.value.length === 0) {
        // show error
        groupInput.style.cssText = 'border-color: red !important';
        groupHelp.style.cssText = 'display: inline; color: red !important';
        // prevent from submission
        return false;
    } else {
        // changing color back
        groupInput.style.cssText = 'border-color: lightgrey !important';
        groupHelp.style.cssText = 'display: none';
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


// Validating delete form
function validateFormD() {
    let selectInputD = document.getElementById('course-d');
    let selectHelpD = document.getElementById('selectHelp-d');
    let enrollNoInputD = document.getElementById('enrollNo-d');
    let enrollmentHelpD = document.getElementById('enrollmentHelp-d');

    console.log(selectInputD.value.length);
    // Check if any course is selected
    if (selectInputD.value.length > 3) {
        // showing good choice
        selectInputD.style.setProperty('border-color', 'green', 'important');
        selectHelpD.style.cssText = 'color: green !important';
    }

    // Check if the length of the id input is not equal to 12
    if (enrollNoInputD.value.length !== 12) {
        // Show the enrollment help message
        enrollNoInputD.style.setProperty('border-color', 'red');
        enrollmentHelpD.style.setProperty('color', 'red', 'important');
        // Prevent form submission
        return false;
    } else {
        // Hide the enrollment help message
        enrollNoInputD.style.setProperty('border-color', 'lightgrey');
        enrollmentHelpD.style.setProperty('color', 'green', 'important');
        // Allow form submission
        return true;
    }
}
