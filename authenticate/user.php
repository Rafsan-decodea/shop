<?php 

session_start();
   // ini_set('display_errors', 1);
 include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");

  $db = new DB();
  $sql = "select * from shop_users";
  $result = $db->query($sql);
  
  $row = mysqli_fetch_array($result);
  
  if($_POST["password"]==$row["password"])// Cheaking User Authentication
   {
      $_SESSION["id"] = $row["id"];
      $_SESSION["uid"] = $row["uid"];
   
   }
   else{

      echo ("Invalide Username Password");
   }

   if (isset($_SESSION["id"]))// if complete User Authentication
   {
      header("location:/shop/dashboard/index.php");
   //    unset($_SESSION["id"]);
   //   unset($_SESSION["uid"]);
   }
   else 
   {
      echo "Session Not Set";
   }

  ?>