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
    }
}







