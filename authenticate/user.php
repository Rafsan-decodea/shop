<?php

use function PHPSTORM_META\type;

session_start();
   // ini_set('display_errors', 1);
 include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");

 if (isset($_POST["email"]) && isset($_POST["password"]))
 {
  $db = new DB();
  $sql = "SELECT * FROM shop_users WHERE email = '".$_POST["email"]."'";
  $result = $db->query($sql);

  $row =  mysqli_fetch_array($result);
  
  if($_POST["password"]==$row["password"])// Cheaking User Authentication
   {
      $_SESSION["id"] = $row["id"];
      $_SESSION["uid"] = $row["uid"];
      $_SESSION["email"]= $row["email"];
      $_SESSION["fristname"] = $row["fristname"];
      $_SESSION["lastname"] = $row["lastname"];
      $_SESSION["location"] = $row["location"];
      $_SESSION["time"] = $row["time"];
   
   }
   else{

      header("location:/shop/index.php?message=Invalide Username Password");
   
       
   }

   if (isset($_SESSION["id"]))// if complete User Authentication
   {
      header("location:/shop/dashboard/index.php");
   //    unset($_SESSION["id"]);
   //   unset($_SESSION["uid"]);
   }
   else 
   {
      header("location:/shop/index.php?message=Detect invalid Response Setting Session");
   }
 }
 else
 {
   header("location:/shop/index.php?message=Fill Up From Properly");
 }
  ?>