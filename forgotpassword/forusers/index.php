
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
           
           
        <h1 class="form__title"> Enter Your gmail </h1>
        <center><h3 style="color:red;" id="msg"></h3></center>
        <center><h3 style="color:green;" id="successmsg"></h3></center>
        
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="Email" id="recoverymail" class="form__input" name="email" autofocus placeholder="Username or email">
                <div class="form__input-error-message"></div>
            </div>
            <input class="form__button" onclick="getemail();"  value="Next"  name="submit" type="submit">

        <script>
      function getemail()
      {
         var recoveryemail = $('#recoverymail').val();
        
          $.ajax({
            url : "action.php",
            type : 'post',
            data : {
              recoveryemailSent : recoveryemail
            },
            success:function(data,status)
            {
                console.log(data);
               if (data == 1)
               {
                   document.getElementById("msg").innerHTML = "";
                  document.getElementById("successmsg").innerHTML = "Found";

               }

               if(data == 0) {

                document.getElementById("successmsg").innerHTML = "";
                document.getElementById("msg").innerHTML = "Not Found";

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



