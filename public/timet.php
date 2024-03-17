<?php
    require_once '../src/unauthenticated.php"';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATD</title>
    <link rel="stylesheet" href="../style/time_slot.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="headerd">
        <img id="icon-su" src="../media/images/icon.png" alt="Shoolini University">
        <a href="/src/logout.php" >
            <img id="profile-p" class="profile-img" src="../media/images/sage.png" alt="Profile">
        </a>
    </div>

    <div class="background-body">

        <!-- Button trigger modal -->
        <p class="modal-launch" data-toggle="modal" data-target="#exampleModalCenter">
            How it words?
        </p>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Website Overview</h5>
                    </div>
                    <div class="modal-body">
                        <p>Welcome to our platform! Below is a helpful guide to navigate through our website's key features:</p>
                        <ul class="modal-ul">
                            <li><u>Selecting Class Time Slots</u>: On the "Select Time Slot" page, you can choose the desired time slot for your class. Simply click on the available slots to proceed.</li>
                            <li><u>Marking Attendance</u>: In the "Mark Attendance" section, you have the option to mark attendance for students. Choose the course or select the "All" option to mark attendance for all students. Follow the prompts to complete the process.</li>
                            <li><u>View Attendance Status</u>: Navigate to the "Attendance Status" page to view the attendance status of students. You'll see lists of present and absent students. Use the provided options to export data to Google Sheets if needed.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="time-heading" id="cur-day"></h3>
        <div class="invalid-feedback" id="select-time">
            Please choose a time slot.
        </div>

        <form action="../src/timeSlot.php" method="post" onsubmit="return validateForm()">
            <div class="timet-container">
                <input type="hidden" id="selectedTime" name="selectedTime">
                <div class="time gone" id="tm-1" onclick="selectDiv('tm-1')">
                    <p class="time-duration inactive-time">9:15 - 10:05</p>
                    <hr>
                    <div class="sub-room">
                        <p class="subject-name"></p>
                        <p class="room-code"></p>
                    </div>
                </div>
                <div class="time" id="tm-2" onclick="selectDiv('tm-2')">
                    <p class="time-duration inactive-time">10:10 - 11:00</p>
                    <hr>
                    <div class="sub-room">
                        <p class="subject-name"></p>
                        <p class="room-code"></p>
                    </div>
                </div>
                <div class="time" id="tm-3" onclick="selectDiv('tm-3')">
                    <p class="time-duration inactive-time">11:05 - 11:55</p>
                    <hr>
                    <div class="sub-room">
                        <p class="subject-name"></p>
                        <p class="room-code"></p>
                    </div>
                </div>
                <div class="time" id="tm-4" onclick="selectDiv('tm-4')">
                    <p class="time-duration inactive-time">12:00 - 12:50</p>
                    <hr>
                    <div class="sub-room">
                        <p class="subject-name"></p>
                        <p class="room-code"></p>
                    </div>
                </div>
                <div class="time" id="tm-5" onclick="selectDiv('tm-5')">
                    <p class="time-duration inactive-time">12:55 - 13:45</p>
                    <hr>
                    <div class="sub-room">
                        <p class="subject-name"></p>
                        <p class="room-code"></p>
                    </div>
                </div>
                <div class="time" id="tm-6" onclick="selectDiv('tm-6')">
                    <p class="time-duration inactive-time">13:50 - 14:40</p>
                    <hr>
                    <div class="sub-room">
                        <p class="subject-name"></p>
                        <p class="room-code"></p>
                    </div>
                </div>
                <div class="time" id="tm-7" onclick="selectDiv('tm-7')">
                    <p class="time-duration inactive-time">14:45 - 15:35</p>
                    <hr>
                    <div class="sub-room">
                        <p class="subject-name"></p>
                        <p class="room-code"></p>
                    </div>
                </div>
                <div class="time" id="tm-8" onclick="selectDiv('tm-8')">
                    <p class="time-duration inactive-time">15:40 - 16:30</p>
                    <hr>
                    <div class="sub-room">
                        <p class="subject-name"></p>
                        <p class="room-code"></p>
                    </div>
                </div>
                <div class="time" id="tm-9" onclick="selectDiv('tm-9')">
                    <p class="time-duration inactive-time">16:35 - 17:25</p>
                    <hr>
                    <div class="sub-room">
                        <p class="subject-name"></p>
                        <p class="room-code"></p>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button name="select" type="submit" value="login" class="sub-btn btn">Select</button>
            </div>
        </form>
    </div>


    <script src="../js/timet.js"></script>
    <script src="../js/api/apiEndpoints.js"></script>
    <script src="../js/api/timetable.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
