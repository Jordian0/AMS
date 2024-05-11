// validating user data using js
function validateForm() {
    let sidInput = document.getElementById('sid');
    let sidInHelp = document.getElementById('sidHelp');

    // Check if sid field is not equal to 12
    if (sidInput.value.length === 0 || sidInput.value.length !== 12) {
        // Show error
        sidInput.style.cssText = 'border-color: red ';
        sidInHelp.style.cssText = 'display: block';
        document.getElementById('sidError').style.cssText = 'display: none';
        document.getElementById('sidAlready').style.cssText = 'display: none';
        document.getElementById('sidSuccess').style.cssText = 'display: none';
    } else {
        // Changing color back
        sidInput.style.cssText = 'border-color: rgba(0, 0, 0, 0.4) ';
        sidInHelp.style.cssText = 'display: none';

        // calling the function
        markAttendance();
    }
}


// function to display the user input message
function showMessage(flag) {
    let sidError = document.getElementById('sidError');
    let sidSuccess = document.getElementById('sidSuccess');
    let sidAlready = document.getElementById('sidAlready');

    if(flag === "marked") {
        sidSuccess.style.cssText = 'display: block';
        sidError.style.cssText = 'display: none';
        sidAlready.style.cssText = 'display: none';
    }
    else if(flag === "exist") {
        sidSuccess.style.cssText = 'display: none';
        sidError.style.cssText = 'display: block';
        sidAlready.style.cssText = 'display: none';
    }
    else if(flag === "already") {
        sidSuccess.style.cssText = 'display: none';
        sidError.style.cssText = 'display: none';
        sidAlready.style.cssText = 'display: block';
    }
}


// Function to display current day
const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
const d = new Date();
let day = weekday[d.getDay()];
document.getElementById('cur-day').innerHTML = day;


// disable non-subject courses
function disableDropdown() {
    const class_courses = JSON.parse(localStorage.getItem('class_courses'));
    const dropdown = document.getElementById('course-select');
    // Iterate over the courses using forEach
    class_courses.forEach(([key, value]) => {
        dropdown.querySelector(`option[value="${key}"]`).disabled = false;
    });
}



// Function to redirect to another page
function redirectToStatus() {
    // Redirect the user to the new page
    window.location.href = '../public/apstatus.php';
}


// Function to redirect to another page
function redirectToSubj() {
    // Redirect the user to subject page
    window.location.href = '../public/timet.php';
}
