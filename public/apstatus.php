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
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATD</title>
    <link rel="stylesheet" href="../style/atstatus_pa.css">
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
        <div class="top-buttons">
            <div class="container-pa">
                <div class="toggle active-d" id="present-p" onclick="toggleDivs('present-p')">Present</div>
                <div class="toggle deactive-d div-button-hover" id="absent-a" onclick="toggleDivs('absent-a')">Absent</div>
            </div>

            <div class="toggle attend-b div-button-hover" onclick="redirectToPage()">Mark</div>
        </div>

        <!-- Button to go back to time -->
        <div class="ex-btn-box">
            <div class="select-t toggle hvr-float" onclick="redirectToSubj()">Subject</div>
        </div>

        <div class="atstatus-container">
            <div id="about-class">
                <p class="subject-name-code">Subject Name</p>
                <p class="teacher-name">Teacher</p>
                <p class="time-period">10:0 - 11:00</p>
                <p class="room-number">G-230</p>
            </div>

            <hr class="div-line">        <!-- Horizontal line -->

            <div id="present-table">
                <template id="table-template-p">
                    <table id="no-margin" class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" style="display:none"></th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Student ID</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    </table>
                    <div class="div-block-p">MCA CC</div>
                    <table class="table table-bordered table-hover table-striped">
                        <tbody id="present-table-body">
                            <template id="present-table-row">
                            <tr>
                                <th class="id" scope="row">ID</th>
                                <td class="uid-no" style="display:none">UIDNo</td>
                                <td class="student-name">Name of student</td>
                                <td class="student-id">ID of student</td>
                                <td class="remove-p"><p onclick="markAbsent(this)">remove</p></td>
                            </tr>
                            </template>
                        </tbody>
                    </table>
                </template>
            </div>

            <div id="absent-table">
                <template id="table-template-a">
                    <table id="no-margin" class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" style="display:none"></th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Student ID</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    </table>
                    <div class="div-block-a">MCA CC</div>
                    <table class="table table-bordered table-hover table-striped  ">
                        <tbody id="absent-table-body">
                            <template id="absent-table-row">
                                <tr>
                                    <th class="id" scope="row">ID</th>
                                    <td class="uid-no" style="display:none">UIDNo</td>
                                    <td class="student-name">Name of student</td>
                                    <td class="student-id">ID of student</td>
                                    <td class="mark-p"><p
                                                onclick="markPresent(this)">mark</p></td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </template>
            </div>

        </div>
    </div>


    <script>
        const timeid = <?php echo $timeid ?>;
        // console.log(timeid);
    </script>
    <script src="../js/apstatus.js"></script>
    <script src="../js/api/subject.js"></script>
    <script src="../js/api/apiEndpoints.js"></script>
    <script src="../js/api/student.js"></script>
    <script>
        getSubject('status');
        displayStudentsTable();
    </script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
