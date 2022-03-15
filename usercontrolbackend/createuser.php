<?php


session_start();
   // ini_set('display_errors', 1);
 include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");

 if (isset($_POST["submit"]))
 {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $fristname= $_POST["fristname"];
    $lastname = $_POST["lastname"];
    $location = $_POST["location"];
    $db = new DB();
    
    
    
    $sql = "INSERT INTO `shop_users` (`id`, `uid`, `email`, `password`, `fristname`, `lastname`, `location`, `time`) 
        VALUES (NULL, '1','".$email."','".$password."', '".$fristname."', '".$lastname."', '".$location."', CURRENT_TIMESTAMP)";
    
    echo $sql;

  $result = $db->insert($sql);

   header("location:/shop/index.php?message=User Added");

 }



//   "INSERT INTO `shop_users` (`id`, `uid`, `email`, `password`, `fristname`, `lastname`, `location`, `time`) VALUES (NULL, '3', 'ad', 'asd', 'asd', 'asd', 'asd', CURRENT_TIMESTAMP);"

