
<?php
 error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../allcss/index.css">
    <title>Recover Password </title>
</head>
<body>
    
<div class="container">
        <form class="form" action="./usercontrolbackend/authuser.php" id="login" method="POST">
            <h1 class="form__title">Give Valid Email </h1>
        
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="Email" class="form__input" name="email" autofocus placeholder="Username or email">
                <div class="form__input-error-message"></div>
            </div>
            <input class="form__button"  value="Continue"  name="submit" type="submit">
            <!-- <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p> -->

            <!-- Create Account  Link -->

            <!-- <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p> -->
        </form>

    </div>
    <script src="../../alljs/index.js"></script>

</body>
</html>



