<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include ($_SERVER['DOCUMENT_ROOT']."/shop/mail/Exception.php");
include ($_SERVER['DOCUMENT_ROOT']."/shop/mail/PHPMailer.php");
include ($_SERVER['DOCUMENT_ROOT']."/shop/mail/SMTP.php");


  class Forgotpassword{

    function __construct()
    {


    }

    function sendRecoverPassword()
    {

        
        $mail = new PHPMailer;
        $mail->isSMTP();                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;               // Enable SMTP authentication
        $mail->Username = 'g8099643@gmail.com';   // SMTP username
        $mail->Password = '0123456789rafsan';   // SMTP password
        $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                    // TCP port to connect to
        
        // Sender info
        $mail->setFrom('shazidno123@gmail.com', 'FromName');
        $mail->addReplyTo('addReplyToEmail@gmail.com', 'ReplyName');
        
        // Add a recipient
        $mail->addAddress('shazidno123@gmail.com');
        
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Mail subject
        $mail->Subject = 'Email from local host to test';
        
        // Mail body content
        $bodyContent = '<h1>From Rafsan</h1>';
        $bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>TechWAR</b></p>';
        $mail->Body    = $bodyContent;
        
        // Send email 
        if(!$mail->send()) { 
            echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
        } else { 
            echo 'Message has been sent.'; 
        } 

    }
  }

$forgotpassword = new Forgotpassword();
$forgotpassword->sendRecoverPassword();


?>