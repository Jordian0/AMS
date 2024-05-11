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
    // console.log(studentData);                // studentData is populated by now
    var class_courses = new Map();

    let id = 1;
    // Iterate over the data
    for (var key in studentData) {
        if (studentData.hasOwnProperty(key)) {
            // Remove unwanted key-value pair
            delete studentData[key].group;
            studentData[key].id = id++;

            // keeping track of courses
            if(!class_courses.get(studentData[key].course_name))
                class_courses.set(studentData[key].course_name, 1);

            // Add new key-value pair
            studentData[key].attendance = 0;
            // console.log(studentData[key]);
        }
    }
    // adding garbage value to display results better later
    studentData[id] = {"id": id, "course_name": '', "name": '', "student_id": '', "attendance": 0};


    // Set the local storage variable
    localStorage.setItem("students", JSON.stringify(studentData));
    // console.log(localStorage.getItem("students"));
    localStorage.setItem("class_courses", JSON.stringify(Array.from(class_courses.entries())));
    // console.log(localStorage.getItem("class_courses"));
    console.log("Got Data!");
});

// check if localstorage variable is set
if(localStorage.getItem("students") !== null) {
    // studentData = JSON.parse(localStorage.getItem("students"));
    // console.log(studentData);
    console.log("Old one");
}


// function to mark the student present with given student id
function markAttendance() {
    var studentID = document.getElementById('sid').value;
    var courseSelect = document.getElementById('course-select').value;

    studentData = JSON.parse(localStorage.getItem("students"));
    var flag = "exist";

    // loop through student data to find the student with matching ID
    for(var key in studentData) {
        if(studentData.hasOwnProperty(key)) {
            if(courseSelect.length) {
                if (studentData[key].student_id === studentID && studentData[key].course_name === courseSelect) {
                    if (studentData[key].attendance === 1)
                        flag = "already";
                    else {
                        studentData[key].attendance = 1;
                        flag = "marked";
                        break;
                    }
                }
            }
            else {
                if (studentData[key].student_id === studentID) {
                    if(studentData[key].attendance === 1)
                        flag = "already";
                    else {
                        studentData[key].attendance = 1;
                        flag = "marked";
                        break;
                    }
                }
            }
        }
    }

    localStorage.setItem("students", JSON.stringify(studentData));

    // clearing user input
    if(flag === "marked")
        document.getElementById('sid').value = "";

    showMessage(flag);
}



// function to clean the table data without removing the structure of the table
function clearTableContainer(containerId) {
    var container = document.getElementById(containerId);
    var children = container.children;

    // Iterate through the child elements
    for (var i = children.length - 1; i >= 0; i--) {
        var child = children[i];

        // Check if the child is not a template tag
        if (child.tagName !== 'TEMPLATE') {
            // Remove the child element
            container.removeChild(child);
        }
    }
}


// function to display student data in table
function displayStudentsTable() {
    studentData = JSON.parse(localStorage.getItem("students"));
    // console.log(studentData);

    // get the table elements for present students
    var presentTable = document.getElementById('present-table');
    var ptemplateTable = document.getElementById('table-template-p').content.cloneNode('true');
    var ptableBody = ptemplateTable.getElementById('present-table-body');

    clearTableContainer('present-table');       // clear the present table

    var pcourse = studentData[1].course_name;
    var pcount = 1;
    // for present students
    for (var pkey in studentData) {
        if (studentData.hasOwnProperty(pkey)) {
            var pstudent = studentData[pkey];

            if (pstudent.course_name === pcourse && studentData[pkey].attendance) {
                // console.log(pstudent);

                // Clone the template row from the HTML table
                var ptemplateRow = ptemplateTable.getElementById('present-table-row').content.cloneNode('true');
                // Populate the cloned row with student data
                ptemplateRow.querySelector('.id').textContent = pcount++;
                ptemplateRow.querySelector('.uid-no').textContent = pkey;
                ptemplateRow.querySelector('.student-name').textContent = pstudent.name;
                ptemplateRow.querySelector('.student-id').textContent = pstudent.student_id;

                // Append the cloned row to the table body
                ptableBody.appendChild(ptemplateRow);
            }
            else if(pstudent.course_name !== pcourse) {
                ptemplateTable.querySelector('.div-block-p').textContent = pcourse;
                presentTable.appendChild(ptemplateTable);
                // presentTable.appendChild(tableBody);
                pcourse = pstudent.course_name;
                pcount = 1;

                ptemplateTable = document.getElementById('table-template-p').content.cloneNode('true');
                ptableBody = ptemplateTable.getElementById('present-table-body');
                // removing cloned table header
                ptemplateTable.removeChild(ptemplateTable.getElementById('no-margin'));
            }
        }
    }



    // get the table data for the absent students
    var absentTable = document.getElementById('absent-table');
    var atemplateTable = document.getElementById('table-template-a').content.cloneNode('true');
    var atableBody = atemplateTable.getElementById('absent-table-body');

    clearTableContainer('absent-table');        // clear the absent table

    var acourse = studentData[1].course_name;
    var acount = 1;
    // for present students
    for (var akey in studentData) {
        if (studentData.hasOwnProperty(akey)) {
            var astudent = studentData[akey];

            if (astudent.course_name === acourse && !studentData[akey].attendance) {
                // console.log(astudent);

                // Clone the template row from the HTML table
                var atemplateRow = atemplateTable.getElementById('absent-table-row').content.cloneNode('true');
                // Populate the cloned row with student data
                atemplateRow.querySelector('.id').textContent = acount++;
                atemplateRow.querySelector('.uid-no').textContent = akey;
                atemplateRow.querySelector('.student-name').textContent = astudent.name;
                atemplateRow.querySelector('.student-id').textContent = astudent.student_id;

                // Append the cloned row to the table body
                atableBody.appendChild(atemplateRow);
            }
            else if(astudent.course_name !== acourse) {
                atemplateTable.querySelector('.div-block-a').textContent = acourse;
                absentTable.appendChild(atemplateTable);
                // presentTable.appendChild(tableBody);
                acourse = astudent.course_name;
                acount = 1;

                atemplateTable = document.getElementById('table-template-a').content.cloneNode('true');
                atableBody = atemplateTable.getElementById('absent-table-body');
                // removing clone table header
                atemplateTable.removeChild(atemplateTable.getElementById('no-margin'));
            }
        }
    }
}


// function to mark attendance in absent table
function markPresent(element) {
    // Get the value inside the 'uid-no' element in the same row
    var uidNo = element.parentNode.querySelector('.uid-no').textContent;
    // console.log('UIDNo:', uidNo);

    studentData = JSON.parse(localStorage.getItem("students"));
    if(studentData.hasOwnProperty(uidNo)) {
        student = studentData[uidNo];
        student.attendance = 1;
    }

    localStorage.setItem("students", JSON.stringify(studentData));
    console.log("updated");

    displayStudentsTable();         // refreshing table
}

// function to mark absent in present table
function markAbsent(element) {
    // Get the value inside the 'uid-no' element in the same row
    var uidNo = element.parentNode.querySelector('.uid-no').textContent;
    // console.log('UIDNo:', uidNo);

    studentData = JSON.parse(localStorage.getItem("students"));
    if(studentData.hasOwnProperty(uidNo)) {
        student = studentData[uidNo];
        student.attendance = 0;
    }

    localStorage.setItem("students", JSON.stringify(studentData));
    console.log("updated");

    displayStudentsTable();         // refreshing table
}



// Make an AJAX request to send the data to a PHP script
// var xhr = new XMLHttpRequest();
// xhr.open("POST", "../../src/students.php", true);
// xhr.setRequestHeader("Content-Type", "application/json");
// xhr.onreadystatechange = function() {
//     if (xhr.readyState === 4 && xhr.status === 200) {
//         if (xhr.status === 200) {
//             console.log(xhr.responseText);
//         } else {
//             console.error("Error sending data to PHP. Status: " + xhr.status);
//         }
//     }
// };
// xhr.send(JSON.stringify(studentData));
