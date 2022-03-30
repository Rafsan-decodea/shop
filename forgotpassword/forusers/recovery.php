
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <title>Recover Password </title>
</head>
<body>
    
<div class="container">
           
           
        <h1 class="form__title"> Enter Your Otp </ h1>
        <center><p style="color:yellow; font-size:small;"  id="msg">Your Otp Send in That Email</p></center>
        
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="number" id="recoverymail" class="form__input" name="email" autofocus placeholder="OTP">
                <div class="form__input-error-message"></div>
            </div>
            <input class="form__button" onclick="getemail();"  value="Next"  name="submit" type="submit">      


    </div>
    <script src="../../alljs/index.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../dashboard/plugins/jquery/jquery.min.js"></script>
    <script src="../../dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</body>
</html>



