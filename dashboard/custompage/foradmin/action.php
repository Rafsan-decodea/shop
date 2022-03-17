<?php

session_start();
   // ini_set('display_errors', 1);
 include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");

$db = new DB();

 extract($_POST);

 if(isset($_POST["emailSend"]) && isset($_POST["passwordSend"]) && isset($_POST["fristnameSend"])
  && isset($_POST["lastnameSend"]) && isset($_POST["locationSend"]))
  {

    $sql =  "INSERT INTO `shop_users` (`id`, `uid`, `email`, `password`, `fristname`, `lastname`, `location`, `time`) 
    VALUES (NULL, '1','".$emailSend."','".$passwordSend."', '".$fristnameSend."', '".$lastnameSend."', '".$locationSend."', CURRENT_TIMESTAMP)";
    
    $result = $db->insert($sql);
    
    header("location: .");

  
  }


 ?>