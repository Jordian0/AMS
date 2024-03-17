// Importing API endpoint
// import { timetableAPI } from "./apiEndpoints.js";


// Function to fetch data from the API
async function getTime() {
    // Making an API call (request) and getting the response back
    const response = await fetch(timetableAPI);
    // parsing it to JSON format
    const data = await response.json();
    // console.log(data);

    // Retrieving data from JSON
    for(const key in data) {
        if(data.hasOwnProperty(key)) {
            // console.log(data[key]);
            const item = data[key];
            const stime = item.stime;
            // console.log(stime);

            // Select the div based on the stime
            let targetDiv;
            switch (stime) {
                case '09:15:00':
                    targetDiv = document.getElementById('tm-1');
                    break;
                case '10:10:00':
                    targetDiv = document.getElementById('tm-2');
                    break;
                case '11:05:00':
                    targetDiv = document.getElementById('tm-3');
                    break;
                case '12:00:00':
                    targetDiv = document.getElementById('tm-4');
                    break;
                case '12:55:00':
                    targetDiv = document.getElementById('tm-5');
                    break;
                case '13:50:00':
                    targetDiv = document.getElementById('tm-6');
                    break;
                case '14:45:00':
                    targetDiv = document.getElementById('tm-7');
                    break;
                case '15:40:00':
                    targetDiv = document.getElementById('tm-8');
                    break;
                case '16:35:00':
                    targetDiv = document.getElementById('tm-9');
                    break;
                default:
                    targetDiv = null;
            }

            if (targetDiv) {
                // Update inner HTML of each tag inside the div
                let subjectName = targetDiv.querySelector('.subject-name');
                let timeDuration = targetDiv.querySelector('.time-duration');
                let roomCode = targetDiv.querySelector('.room-code');

                let group;
                if(item.grp === 'a') {
                    group = '(Group A)';
                }
                else if(item.grp === 'b') {
                    group = '(Group B)';
                }
                else
                    group = '';

                // Update content based on JSON data
                subjectName.innerHTML = `${item.course} ${group} - <u>${item.faculty}</u>`;
                roomCode.innerHTML = item.room_no;

                // Add classname to the inner div
                timeDuration.classList.remove('inactive-time');
                timeDuration.classList.add('active-time');

                // Adding animation to active container
                targetDiv.classList.add('time-an');
            }
        }
    }
}
// Calling the function
getTime();

