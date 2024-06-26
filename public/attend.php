<?php
session_start();

// If user logged out and still trying to access the page
if(!isset($_SESSION['UserData'])){
    header("location: ./login.php");
    exit;
}

if(isset($_SESSION['time-id'])) {
    $timeid = $_SESSION['time-id'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATD</title>
    <link rel="stylesheet" href="../style/login_style.css">
    <link rel="stylesheet" href="../style/attend_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="module" src="../js/api/subject.js"></script>

    </head>
<body>
    <div class="headerd">
        <img id="icon-su" src="../media/images/icon.png" alt="Shoolini University">
        <a href="/src/logout.php" >
            <img id="profile-p" class="profile-img" src="../media/images/sage.png" alt="Profile">
        </a>
    </div>
    <div class="background-body">
        <div class="container-la">
            <div class="login-d toggle">Login</div>
            <div class="atd-a toggle">ATD</div>
        </div>
        <div class="attend-container">
            <form name="Attend" class="form-attend">
                <div class="form-group">
                    <label for="course-select"></label>
                    <select class="custom-select" name="course-select" id="course-select">
                        <option value="" selected>All</option>
                        <option value="MCA AI" disabled>MCA AI</option>
                        <option value="MCA CC" disabled>MCA CC</option>
                        <option value="MCA DevOps" disabled>MCA DevOps</option>
                    </select>
                    <label for="sid" class="hidden-label">Student ID:</label>
                    <input type="text" id="sid" placeholder="Student ID" value="PGD2023" aria-describedby="sidHelp"/>
                    <div id="sidHelp" class="invalid-feedback">
                        12 characters in Student ID.
                    </div>
                    <div id="sidSuccess" class="valid-feedback">
                        Successfully marked
                    </div>
                    <div id="sidError" class="invalid-feedback">
                        Invalid Student ID
                    </div>
                    <div id="sidAlready" class="invalid-feedback">
                        Already Marked
                    </div>
                </div>
                <div class="form-group flex-button">
                    <button type="button" class="sts-btn btn" onclick="redirectToStatus()">Status</button>
                    <button type="button" class="mrk-btn btn" onclick=" validateForm()">Mark</button>
                </div>
            </form>

            <div class="ex-btn-box">
                <div class="select-t toggle hvr-float" onclick="redirectToSubj()">Subject</div>
            </div>
        </div>


        <div id="api-sub-container">
            <h5 class="time-heading" id="cur-day">Day</h5>
            <p class="start-end-time">11:00 - 12:00</p>
            <p class="subject-with-id-grp">Course</p>
            <p class="faculty-name">faculty</p>
            <p class="room-code">room-G</p>
        </div>
    </div>


    <script>
        const timeid = <?php echo $timeid ?>;
        // console.log(timeid);
    </script>
    <script src="../js/attend.js"></script>
    <script src="../js/api/apiEndpoints.js"></script>
    <script src="../js/api/subject.js"></script>
    <script src="../js/api/student.js"></script>

    <script>
        if(localStorage.getItem("students") === null) {
            (async () => {
                await getSubject('attend');          // Wait for getSubject to complete
                // console.log(subid_stu, group_stu);
                await getStudents();          // getting the students data
                disableDropdown();
            })();
        }
        else {
            getSubject('attend');
            disableDropdown();
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
