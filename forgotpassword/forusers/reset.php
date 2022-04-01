<?php 

session_start();
$_SESSION["timeout"] = time();
if (!isset($_SESSION["otp"]) or time()- $_SESSION["timeout"] > 120) // set timer for Destroy Session
{
  header("refresh:0;url=/shop/index.php?message=Password Reset Time Expired");
  session_destroy();
  $_SERVER['PHP_SELF'];

}

?>
<div class="container">
        
           
        <h1 class="form__title"> Enter Your Otp </ h1>
        <center><p style="color:yellow; font-size:small;" >Your Otp Send in That Email</p></center>
        <center><p style="color:blue; font-size:medium;" id="countdown" ></p></center>
        <center><h3 style="color:red;" id="errormsg"></h3></center>
        <center><h3 style="color:green;" id="successmsg"></h3></center>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="number" id="getrecoverymail" min="1" max="6" class="form__input" name="email" autofocus placeholder="OTP">
                <div class="form__input-error-message"></div>
            </div>
            <input class="form__button" onclick="verifyotp();"  value="Next"  name="submit" type="submit">      


            

   </div>

    <script src="../../alljs/index.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../dashboard/plugins/jquery/jquery.min.js"></script>
    <script src="../../dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</body>
</html>
