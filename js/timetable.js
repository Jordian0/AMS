// Function to select the time and change input value
function selectDiv(divId) {
    // Remove 'selected' class from all divs
    var divs = document.querySelectorAll('.time');
    divs.forEach(function(div) {
        div.classList.remove('selected');
    });

    // Add 'selected' class to the clicked div
    var selectedDiv = document.getElementById(divId);
    console.log(divId);
    selectedDiv.classList.add('selected');

    // Set the value of the hidden input field
    document.getElementById('selectedTime').value = divId;
}
