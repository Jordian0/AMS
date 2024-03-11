<?php
session_start();
$msg = isset($_SESSION['error_login']);

// Clear the error message after displaying
unset($_SESSION['error_login']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATD</title>
    <link rel="stylesheet" href="style/login_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="headerd">
        <img id="icon-su" src="./media/images/icon.png" alt="Shoolini University">
    </div>
    <div class="background-body">
        <div class="container-la">
            <div class="login-a toggle">Login</div>
            <div class="atd-d toggle">ATD</div>
        </div>
        <div class="login-container">
            <form action="php/validateLogin.php" method="post" name="Login" onsubmit="return validateForm()"
                  class="form-login">
                <div class="form-group">
                    <label for="uid" class="col-form-label">User ID:</label>
                    <input type="text" name='uid' id="uid" placeholder="User ID"/>
                </div>
                <div class="form-group">
                    <label for="otp" class="col-form-label">OTP:</label>
                    <input type="password" inputmode="numeric" name="otp" id="otp" maxlength="6" placeholder="Enter OTP"/>
                    <div class="invalid-feedback" id="error_otp">
                        Enter 6 digits!
                    </div>
                </div>

                <div class="invalid-feedback" id="error_login">
                    Invalid login details!
                </div>

                <button name="login" type="submit" value="login" class="sub-btn btn">Sign in</button>
            </form>
        </div>
    </div>


    <script>
        const login_error = <?php echo $msg ? 'true' : 'false'; ?>;
    </script>
    <script src="js/login.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
