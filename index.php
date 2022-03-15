
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./allcss/index.css">
    <title>Shop Management Login </title>
</head>
<body>
    
<div class="container">
        <form class="form" action="./usercontrolbackend/authuser.php" id="login" method="POST">
            <h1 class="form__title">User Login</h1>
            <?php $msg=$_GET['message'];?>
            <center><h3 style="color:red;"> <?php echo $msg ?></h3></center>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="email" autofocus placeholder="Username or email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus name="password" placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <input class="form__button"  value="Continue"  name="submit" type="submit">
            <!-- <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p> -->
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>


        <form class="form form--hidden" method="POST"  action="./usercontrolbackend/createuser.php" id="createAccount">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>

            <div class="form__input-group">
                <input type="email" id="signupUsername" required class="form__input" autofocus name="email" placeholder="Email">
                <!-- <div class="form__input-error-message"></div> -->
            </div>
            <div class="form__input-group">
                <input type="password" required id="signuppassword" class="form__input" autofocus name="password" placeholder="password">
                <!-- <div class="form__input-error-message"></div> -->
            </div>

            <div class="form__input-group">
                <input type="text" id="singupfristname" class="form__input" autofocus name="fristname" placeholder="Fristname">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input type="text" id="signuplastname" class="form__input" autofocus name="lastname" placeholder="lastname">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input type="text" id="signuploaction" required  class="form__input" autofocus name="location" placeholder="location">
                <div class="form__input-error-message"></div>
            </div>
          
            <input class="form__button"  value="Continue"  name="submit" type="submit">
           
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
    <script src="./alljs/index.js"></script>

</body>
</html>