const inputs = document.getElementById("otp");
inputs.addEventListener("input", function (e) {
    const target = e.target;
    let val = target.value;
    val = val.replace(/\D/g, '');
    target.value = val;

    if (isNaN(val)) {
        target.value = "";
        return;
    }
    if (val !== "") {
        const next = target.nextElementSibling;
        if (next) {
            next.focus();
        }
    }
});
inputs.addEventListener("keypress", function (e) {
    const target = e.target;
    const key = e.key.toLowerCase();

    if (key === "backspace" || key === "delete") {
        target.value = "";
        const prev = target.previousElementSibling;
        if (prev) {
            prev.focus();
        }
    }
});



// validating user data using js
function validateForm() {
    let userIdInput = document.getElementById('uid');
    let userOTPInput = document.getElementById('otp');
    let errorOTPInput = document.getElementById('error_otp');
    let invalidLoginMessage = document.getElementById('error_login');

    // Check if name field is entered or not
    if (userIdInput.value.length === 0) {
        // Show error
        userIdInput.style.cssText = 'border-color: red ';
        // Prevent form submission
        return false;
    } else {
        // Changing color back
        userIdInput.style.cssText = 'border-color: rgba(0, 0, 0, 0.4) ';
    }

    // Check if the length of the otp input is not equal to 6
    if (userOTPInput.value.length !== 6) {
        // Show the enrollment help message
        userOTPInput.style.setProperty('border-color', 'red');
        errorOTPInput.style.cssText = 'display: block';
        invalidLoginMessage.style.cssText = 'display:none';
        // Prevent form submission
        return false;
    } else {
        // Hide the enrollment help message
        userOTPInput.style.setProperty('border-color', 'rgba(0, 0, 0, 0.4)');
        errorOTPInput.style.cssText = 'display: none';
        // Allow form submission
        return true;
    }
}


// console.log(login_error);
// checking for login error message in php variable that is passed
if(login_error) {
    let errorMessage = document.getElementById('error_login');
    errorMessage.style.cssText = 'display: inline;'
}






