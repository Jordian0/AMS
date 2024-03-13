// validating user data using js
function validateForm() {
    let sidInput = document.getElementById('sid');
    let sidInHelp = document.getElementById('sidHelp');

    // Check if sid field is not equal to 12
    if (sidInput.value.length === 0) {
        // Show error
        sidInput.style.cssText = 'border-color: red ';
        sidInHelp.style.cssText = 'display: block';
        // Prevent form submission
        return false;
    } else {
        // Changing color back
        sidInput.style.cssText = 'border-color: rgba(0, 0, 0, 0.4) ';
        sidInHelp.style.cssText = 'display: none';
        return true;
    }
}


// Function to display current day
const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
const d = new Date();
let day = weekday[d.getDay()];
document.getElementById('cur-day').innerHTML = day;


// Function to redirect to another page
function redirectToPage() {
    // Redirect the user to the new page
    window.location.href = '../public/apstatus.php';
}

