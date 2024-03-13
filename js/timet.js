// Function to display current day
const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
const d = new Date();
let day = weekday[d.getDay()];
document.getElementById('cur-day').innerHTML = "Select a time slot:   "+day;


// Function to validate the form
function validateForm() {
    let userSelect = document.getElementById('selectedTime');
    let timeSelect = document.getElementById('select-time');

    // check if value is selected
    if (!userSelect.value) {
        timeSelect.style.cssText = 'display: block';
        return false;
    } else {
        timeSelect.style.cssText = 'display: none';
        return true;
    }
}


// Function to select the time and change input value
function selectDiv(divId) {
    // Remove 'selected' class from all divs
    var divs = document.querySelectorAll('.time');
    divs.forEach(function (div) {
        div.classList.remove('selected');
    });
    document.getElementById('selectedTime').value = '';

    // Add 'selected' class to the clicked div
    var selectedDiv = document.getElementById(divId);
    // console.log(divId);
    if (!selectedDiv.querySelector(".time-duration").classList.contains('inactive-time')) {
        selectedDiv.classList.add('selected');
        // Set the value of the hidden input field
        document.getElementById('selectedTime').value = divId;
    }
}

