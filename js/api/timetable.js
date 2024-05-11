
// Function to fetch data from the API
async function getTime() {
    // Making an API call (request) and getting the response back
    const response = await fetch(timetableAPI);
    // parsing it to JSON format
    const data = await response.json();
    // console.log(data);

    // Retrieving data from JSON
    for(let key in data) {
        if(data.hasOwnProperty(key)) {
            // console.log(data[key]);
            const item = data[key];
            // console.log(item);
            const time_id = item.tid;
            // console.log(time_id);

            // Select the div based on the stime
            let targetDiv;
            switch (time_id) {
                case 1:
                    targetDiv = document.getElementById('tm-1');
                    break;
                case 2:
                    targetDiv = document.getElementById('tm-2');
                    break;
                case 3:
                    targetDiv = document.getElementById('tm-3');
                    break;
                case 4:
                    targetDiv = document.getElementById('tm-4');
                    break;
                case 5:
                    targetDiv = document.getElementById('tm-5');
                    break;
                case 6:
                    targetDiv = document.getElementById('tm-6');
                    break;
                case 7:
                    targetDiv = document.getElementById('tm-7');
                    break;
                case 8:
                    targetDiv = document.getElementById('tm-8');
                    break;
                case 9:
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
                subjectName.innerHTML = `${item.subject} ${group} - <u>${item.faculty}</u>`;
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



// clearing students data localstorage
localStorage.removeItem("students");
localStorage.removeItem("class_courses");
