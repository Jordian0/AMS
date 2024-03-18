// Function to toggle b/w present and absent
var currentDivId = 'present-p';
function toggleDivs(divId) {
    const btn1 = document.getElementById('present-p');
    const btn2 = document.getElementById('absent-a');
    const div1 = document.getElementById('present-table');
    const div2 = document.getElementById('absent-table');

    if(divId !== currentDivId) {
        // Toggle the display of divs
        div1.style.display = (divId === 'present-p') ? 'block' : 'none';
        div2.style.display = (divId === 'absent-a') ? 'block' : 'none';

        // Change CSS properties based on the div to be displayed
        if (divId === 'present-p') {
            btn1.classList.add('active-d');
            btn1.classList.remove('deactive-d');
            btn2.classList.add('deactive-d');
            btn2.classList.remove('active-d');
            btn2.classList.add('div-button-hover');
            btn1.classList.remove('div-button-hover');
        } else {
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


// Function to redirect to another page
function redirectToPage() {
    // Redirect the user to the new page
    window.location.href = '../public/attend.php';
}


// Function to redirect to another page
function redirectToSubj() {
    // Redirect the user to subject page
    window.location.href = '../public/timet.php';
}


// calling the api function
// import { getSubject } from "./subject.js";
// getSubject('status');       // calling function
