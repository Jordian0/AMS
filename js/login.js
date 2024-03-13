const inputs = document.getElementById("pswd");
inputs.addEventListener("input", function (e) {
    const target = e.target;
    let val = target.value;
    val = val.replace(/\s/g, '');
    target.value = val;

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
    let userPswdInput = document.getElementById('pswd');
    let errorPswdInput = document.getElementById('error_pswd');
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

    // Check if the length of the password input is not equal to 8
    if (userPswdInput.value.length < 8) {
        // Show the enrollment help message
        userPswdInput.style.setProperty('border-color', 'red');
        errorPswdInput.style.cssText = 'display: block';
        invalidLoginMessage.style.cssText = 'display:none';
        // Prevent form submission
        return false;
    } else {
        // Hide the enrollment help message
        userPswdInput.style.setProperty('border-color', 'rgba(0, 0, 0, 0.4)');
        errorPswdInput.style.cssText = 'display: none';
        // Allow form submission
        return true;
    }
}


// console.log(login_error);
// checking for login error message in src variable that is passed
if(login_error) {
    let errorMessage = document.getElementById('error_login');
    errorMessage.style.cssText = 'display: inline;'
}




