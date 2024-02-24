<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posting Data</title>
</head>
<body>
    <section style="text-align: center; margin-top: 20%">
        <h1>Storing form data in database</h1>
        <form action="insert.php" method="post">
            <p>
                <label for="course">Choose the course: </label>
                <select name="course-select" id="course">
                    <option value="">Select...</option>
                    <option value="mca_ai">MCA AI</option>
                    <option value="mca_cc">MCA CC</option>
                    <option value="mca_dop">MCA DevOps</option>
                </select>
            </p>

            <p>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name">
            </p>
            <p>
                <label for="enrollNo">Enrollment no:</label>
                <input type="text" name="enrollNo" id="enrollNo">
            </p>

            <input type="submit" value="Submit">
        </form>
    </section>
</body>
</html>
