// Function to fetch the subject/class data from the table
async function getSubject(page) {
    console.log(timeid);
    const api_url = `http://localhost:63342/ATD/api_files/api/timetable/readsubject.php?id=${timeid}`;
    // Making an API call (request) and getting the response back
    const response = await fetch(api_url);
    // parsing it to JSON format
    const data = await response.json();
    // console.log(data);

    if(page === 'attend')
        updateAttendPage(data);
    else if(page === 'status')
        updateApstatusPage(data);
}

function updateAttendPage(data) {
    // Extracting values from the api response
    const {stime, etime, course_id, course, faculty, grp, room_no} = data;

    // Assigning values to variables
    let group;
    if (grp === 'a')
        group = 'A';
    else if (grp === 'b')
        group = 'B';

    // setting up query selectors to target attend html page elements
    const mcontainer = document.getElementById('api-sub-container')
    let mstartEndTime = mcontainer.querySelector('.start-end-time');
    let mcourseWithId = mcontainer.querySelector('.course-with-id-grp');
    let mteacherName = mcontainer.querySelector('.faculty-name');
    let mroomCode = mcontainer.querySelector('.room-code');
    // updating content based on JSON data
    mstartEndTime.innerHTML = `${stime} - ${etime}`;
    if (group)
        mcourseWithId.innerHTML = `${course}(${course_id}) - Group: ${group}`;
    else
        mcourseWithId.innerHTML = `${course} (${course_id})`;
    mteacherName.innerHTML = `${faculty}`;
    mroomCode.innerHTML = `${room_no}`;
}

function updateApstatusPage(data) {
    // Extracting values from the api response
    const {stime, etime, course_id, course, faculty, grp, room_no} = data;

    // Assigning values to variables
    let group;
    if (grp === 'a')
        group = 'A';
    else if (grp === 'b')
        group = 'B';

    // setting up query selectors to target apstatus html page elements
    const scontainer = document.getElementById('about-class');
    let ssubjectName = scontainer.querySelector('.subject-name-code');
    let steacherName = scontainer.querySelector('.teacher-name');
    let stimePeriod = scontainer.querySelector('.time-period');
    let sroomCode = scontainer.querySelector('.room-number');
    // updating content based on JSON data
    if(group)
        ssubjectName.innerHTML = `${course}(${course_id}) - Group: ${group}`;
    else
        ssubjectName.innerHTML = `${course} (${course_id})`;
    steacherName.innerHTML = `${faculty}`;
    stimePeriod.innerHTML = `${stime} - ${etime}`;
    sroomCode.innerHTML = `${room_no}`;

}


