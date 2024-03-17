<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posting Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
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
            <div class="container-rd">
                <div class="toggle active-d" id="insert-i" onclick="toggleDivs('insert-i')">Registration</div>
                <div class="toggle deactive-d" id="delete-d" onclick="toggleDivs('delete-d')">Delete</div>
            </div>

            <div class="toggle timet-b div-button-hover" onclick="redirectToPage()">Home</div>
        </div>

        <section id="register-stu">
            <h1 class="text-center form-head">Storing form data in student database</h1>
            <form class="form-rcont-div" action="insert.php" method="post" onsubmit="return validateFormR()">
                <div class="form-group">
                    <label for="course-r" class="col-sm">Course * </label>
                    <select class="form-control spacing-1" name="course-select" id="course-r"
                            aria-describedby="selectHelp">
                        <option value="" disabled selected>Select...</option>
                        <option value="mca_ai">MCA AI</option>
                        <option value="mca_cc">MCA CC</option>
                        <option value="mca_dop">MCA DevOps</option>
                    </select>
                    <small id="selectHelp-r" class="text-muted">
                        Select Course!
                    </small>
                </div>

                <div class="form-group">
                    <label for="name-r" class="col-sm">Full name * </label>
                    <input type="text" name="name" class="form-control spacing-2" id="name-r"
                           aria-describedby="nameHelp"
                           placeholder="Name">
                    <small id="nameHelp-r" class="text-muted">
                        Enter Name!
                    </small>
                </div>

                <div class="form-group">
                    <label for="group-r" class="col-sm">Group *</label>
                    <input type="text" name="group" class="form-control spacing-3" id="group-r"
                           aria-describedby="groupHelp"
                           placeholder="Group">
                    <small id="groupHelp-r" class="text-muted">
                        Enter Group!
                    </small>
                </div>

                <div class="form-group">
                    <label for="enrollNo-r" class="col-sm">Enrollment no *</label>
                    <input type="text" name="enrollNo" class="form-control spacing-4" id="enrollNo-r"
                           aria-describedby="enrollmentHelp" value="PGD20" required>
                    <small id="enrollmentHelp-r" class="text-muted">
                        Must be exact 12 characters long.
                    </small>
                </div>

                <div class="form-group text-center">
                    <input type="submit" class="btn sub-btn m-top">
                </div>
            </form>
        </section>

        <section id="delete-stu">
            <h1 class="text-center form-head">Deleting student data from the database</h1>
            <form class="form-dcont-div" action="" method="post" onsubmit="return validateFormD()">
                <div class="form-group">
                    <label for="course-d" class="col-sm">Course</label>
                    <select class="form-control spacing-5" name="course-select" id="course-d"
                            aria-describedby="selectHelp">
                        <option value="All" selected>All</option>
                        <option value="mca_ai">MCA AI</option>
                        <option value="mca_cc">MCA CC</option>
                        <option value="mca_dop">MCA DevOps</option>
                    </select>
                    <small id="selectHelp-d" class="text-muted dele-info">
                        Optional!
                    </small>
                </div>

                <div class="form-group">
                    <label for="enrollNo-d" class="col-sm">Enrollment no *</label>
                    <input type="text" name="enrollNo" class="form-control spacing-6" id="enrollNo-d"
                           aria-describedby="enrollmentHelp" value="PGD20" required>
                    <small id="enrollmentHelp-d" class="text-muted dele-info">
                        Must be exact 12 characters long.
                    </small>
                </div>

                <div class="form-group text-center">
                    <input type="submit" class="btn sub-btn m-top">
                </div>
            </form>
        </section>
    </div>


    <!-- .........  -->
    <?php
    // Include the success message display logic
        include 'sql_message.php';
    ?>

    <script src="validate.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
