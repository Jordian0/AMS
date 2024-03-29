let studentData;

// Function to fetch data from the API
async function getStudents() {
    let api_url;
    if (group_stu)
        api_url = `${getStudentAPI}?subject_id=${subid_stu}&group=${group_stu}`;
    else
        api_url = `${getStudentAPI}?subject_id=${subid_stu}`;

    // console.log(api_url);

    // Making an API call (request) and getting the response back
    const response = await fetch(api_url);
    // parsing it to JSON format
    studentData = await response.json();

    // After populating studentData, trigger an event
    const eventStu = new Event('studentsLoaded');
    document.dispatchEvent(eventStu);
}

// Listen for the 'studentsLoaded' event
document.addEventListener('studentsLoaded', function() {
    // console.log(studentData);                // studentData is pupulated by now

    // Make an AJAX request to send the data to a PHP script
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../../src/students.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
            } else {
                console.error("Error sending data to PHP. Status: " + xhr.status);
            }
        }
    };
    xhr.send(JSON.stringify(studentData));
});

