
<?php
 error_reporting(0);
 session_start();
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
        <center><p style="color:yellow; font-size:small;" >Your Otp Send in That Email</p></center>
        <center><h3 style="color:red;" id="errormsg"></h3></center>
        <center><h3 style="color:green;" id="successmsg"></h3></center>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="number" id="getrecoverymail" min="1" max="6" class="form__input" name="email" autofocus placeholder="OTP">
                <div class="form__input-error-message"></div>
            </div>
            <input class="form__button" onclick="verifyotp();"  value="Next"  name="submit" type="submit">      
    
<script>
     function verifyotp()
      {
         var recoveryemail = $('#getrecoverymail').val();

        // document.getElementById("errorms").innerHTML = "";
        // document.getElementById("successmsg").innerHTML = "";
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
              alert(data);

               if (data == 1)
               {
            
                // document.getElementById("successmsg").innerHTML = "OTP Match";

               }

               if(data == 0) {
                
               // document.getElementById("errorms").innerHTML = "OTP NOT Match";
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



