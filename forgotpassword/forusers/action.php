<?php 
 //ini_set('display_errors', 1);
session_start();

include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include ($_SERVER['DOCUMENT_ROOT']."/shop/mail/Exception.php");
include ($_SERVER['DOCUMENT_ROOT']."/shop/mail/PHPMailer.php");
include ($_SERVER['DOCUMENT_ROOT']."/shop/mail/SMTP.php");

class Email{



    function __construct()
    {
        
    }

    function checkemail_sendotp()
    {
        $db = new DB();
        extract($_POST);
        $this->pubemail = $_POST["recoveryemailSent"];
        if(isset($_POST["recoveryemailSent"]))
        {
            
            $_SESSION["emailcapture"] = $_POST["recoveryemailSent"];
            $sql = "SELECT email from shop_users WHERE email = '$recoveryemailSent'  && uid = 1";
            $result = $db->query($sql);
            if(mysqli_num_rows($result))
            {
              echo json_encode(1);
             
              $random = rand(100000,999999);
              
              $_SESSION["otp"] = $random;
              $_SESSION["timeout"] = time();

              $mail = new PHPMailer;
              $mail->isSMTP();                      // Set mailer to use SMTP
              $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers
              $mail->SMTPAuth = true;               // Enable SMTP authentication
              $mail->Username = 'g8099643@gmail.com';   // SMTP username
              $mail->Password = '0123456789rafsan';   // SMTP password
              $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
              $mail->Port = 587;                    // TCP port to connect to
        
        // Sender info
             $mail->setFrom($recoveryemailSent, 'Password Reset');
             $mail->addReplyTo('addReplyToEmail@gmail.com', 'ReplyName');
        
        // Add a recipient
             $mail->addAddress($recoveryemailSent);
        
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        // Set email format to HTML
             $mail->isHTML(true);
        
        // Mail subject
             $mail->Subject = 'Password Reset';
        
        // Mail body content
             $bodyContent = '<h1>OTP ==> '.$random.' </h1>';
             $bodyContent .= '<p>Otp Valid For 1 Minute <b>Keep It Mind</b></p>';
             $mail->Body    = $bodyContent;
             $mail->send();

            //  if(!$mail->send()) { 
            //     echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
            // } else { 
            //     echo 'Message has been sent.'; 
            // }
           

            }
            else{
                  
                echo json_encode(0);
            }
         
        }
    }

   function verify_otp()
   { 
    $db = new DB();
    extract($_POST);
    if(isset($_POST["checkotp"]))
    {
        if($_SESSION["otp"]==$checkotp)
        {
            echo json_encode(1);  
        }
        else
        {
            echo json_encode(0);
            //session_destroy();
        }
    }

   }

   function set_new_password()
   {
    $db = new DB();
    extract($_POST);

    if(isset($_POST["getnewpasswordSend"]))
    {
        echo json_encode($getnewpasswordSend);
        echo json_encode($_SESSION["emailcapture"]);
    }   

   }
}
   
$email = new Email();
$email->checkemail_sendotp();
$email->verify_otp();
$email->set_new_password();

?> 

