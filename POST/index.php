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
    <section>
        <h1 class="text-center display-4">Storing form data in database</h1>
        <form action="insert.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="course" class="spacing-1 col-sm">Choose the course: </label>
                <select class="form-control" name="course-select" id="course" aria-describedby="selectHelp">
                    <option value="">Select...</option>
                    <option value="mca_ai">MCA AI</option>
                    <option value="mca_cc">MCA CC</option>
                    <option value="mca_dop">MCA DevOps</option>
                </select>
                <small id="selectHelp" class="text-muted">
                    Select Course!
                </small>
            </div>

            <div class="form-group">
                <label for="name" class="spacing-2 col-sm">Name: </label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp"
                       placeholder="Name">
                <small id="nameHelp" class="text-muted">
                    Enter Name!
                </small>
            </div>

            <div class="form-group">
                <label for="enrollNo" class="spacing-3 col-sm">Enrollment no:</label>
                <input type="text" name="enrollNo" class="form-control" id="enrollNo" aria-describedby="enrollmentHelp" value="PGD20" required>
                <small id="enrollmentHelp" class="text-muted">
                    Must be exact 12 characters long.
                </small>
            </div>

            <div class="form-group text-center">
                <input type="submit" class="btn btn-primary btn-lg m-top">
            </div>
        </form>
    </section>


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
