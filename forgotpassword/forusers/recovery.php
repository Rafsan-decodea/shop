
<?php
 error_reporting(0);
 session_start();
 if (!isset($_SESSION["otp"]) or time()- $_SESSION["timeout"] > 120) // set timer for Destroy Session
{
   header("refresh:0;url=/shop/index.php?message=OTP Expired");
   session_destroy();
   $_SERVER['PHP_SELF'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../allcss/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <title>Enter Your OTP </title>
</head>
<body>
    
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

  <script>
      var seconds = localStorage.getItem('remainTime'); //gettting saved time from localstorage

if(seconds == null || seconds == undefined){
  seconds = 120; //default time
}

function secondPassed() {
  var minutes = Math.round((seconds - 30)/60);
  var remainingSeconds = seconds % 60;
  if (remainingSeconds < 10) {
      remainingSeconds = "0" + remainingSeconds; 
  }
  document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
  if (seconds == 0) {
      clearInterval(countdownTimer);
  } else {    
      seconds--;
      localStorage.setItem('remainTime',seconds); //saving time to localstorage
  }
}
localStorage.clear();

var countdownTimer = setInterval('secondPassed()', 1000);

  </script>
            

<script>
     function verifyotp()
      {
         var recoveryemail = $('#getrecoverymail').val();

         document.getElementById("errormsg").innerHTML = "";
         document.getElementById("successmsg").innerHTML = "";
;


          $.ajax({
            url : "action.php",
            type : 'post',
            data : {
              checkotp : recoveryemail
            },
            success:function(data,status)
            {

              
              //console.log(data);
          

               if (data == 1)
               {
            
                document.getElementById("successmsg").innerHTML = "OTP Match";

               }

               if(data == 0) {
                
                document.getElementById("errormsg").innerHTML = "OTP NOT MATCH";
               }
       
              
            }
            
          });
    }

  </script>

    </div>
    <script src="../../alljs/index.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../dashboard/plugins/jquery/jquery.min.js"></script>
    <script src="../../dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</body>
</html>



