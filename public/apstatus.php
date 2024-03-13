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

        <div class="atstatus-container">
            <div id="about-class">
                <p class="subject-name-code">Subject Name</p>
                <p class="teacher-name">Teacher</p>
                <p class="time-period">10:0 - 11:00</p>
                <p class="room-number">G-230</p>
            </div>

            <div id="present-table">
                <div class="div-block"></div>
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>The Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="absent-table">
                <div class="div-block"></div>
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">absent first</th>
                            <th scope="col">absent last</th>
                            <th scope="col">roll no</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>The Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
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
    <script>
        getSubject('status');
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
