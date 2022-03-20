<?php

session_start();
// ini_set('display_errors', 1);
include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");

class Seemember{

  function __construct()
  {
     
  
  }

  function adduser()
  {
    $db = new DB();
    extract($_POST);

    if(isset($_POST["emailSend"]) && isset($_POST["passwordSend"]) && isset($_POST["fristnameSend"])
    && isset($_POST["lastnameSend"]) && isset($_POST["locationSend"]))
    {
      $emailSend = $_POST["emailSend"];
      $passwordSend = $_POST["passwordSend"];
      $fristnameSend = $_POST["fristnameSend"];
      $lastnameSend = $_POST["lastnameSend"];
      $locationSend = $_POST["locationSend"];
  
    // Front End Cheking 
  
      $checksql = "SELECT `email` FROM `shop_users` WHERE `email` = '".$emailSend."'"; 
      $seechek = $db->query($checksql);
      $response = array();
      while ($row = mysqli_fetch_assoc($seechek))
      { 
         $response = $row;
      }
  
      echo json_encode($response); // This is for Send All Value To Front Cheking If Exist 
  
      
      // Backend Cheking 
  
      $testsql = "SELECT `email` FROM `shop_users` WHERE `email` = '".$emailSend."'"; 
      $select = $db->query($testsql);
      if(mysqli_num_rows($select)) {
        // header("location:/shop/index.php?message=User Email Already Exist");
        
    }
  
    else{
      
  
  
      $sql =  "INSERT INTO `shop_users` (`id`, `uid`, `email`, `password`, `fristname`, `lastname`, `location`, `time`) 
      VALUES (NULL, '1','".$emailSend."','".$passwordSend."', '".$fristnameSend."', '".$lastnameSend."', '".$locationSend."', CURRENT_TIMESTAMP)";
      
       $db->insert($sql);
  
  
    }
  
   }

  }


  function deleteuser()
  {
    $db = new DB();
    extract($_POST);
    if(isset($_POST["deleteuseridSend"]))
    {
      $deleteuseridSend = $_POST["deleteuseridSend"];
      $sql = "delete from shop_users WHERE id = ".$deleteuseridSend."";
      $db->query($sql);
     }


  }


  function seeuser()
  {
    $db = new DB();
    extract($_POST);

    if(isset($_POST["userupdateid"]))
    {
       $userid = $_POST["userupdateid"];
       $sql = "SELECT * FROM `shop_users` WHERE id= ".$userid."";
       $result = $db->query($sql);
       $response = array();
       while ($row = mysqli_fetch_assoc($result))
       { 
          $response = $row;
       }
  
       echo json_encode($response);
    
    }


  }


  function updateuser()
  {
    $db = new DB();
    extract($_POST);
    if(isset($_POST["idSend"]))
   {
  $userid = $_POST["idSend"];
  $email = $_POST["updateemailSend"];
  $password = $_POST["updatepasswordSend"];
  $fristname = $_POST["updatefristnameSend"];
  $lastname = $_POST["updatelastnameSend"];
  $location = $_POST["updatelocationSend"];

  echo json_decode($userid);
  $sql = "update shop_users set email= '$email', password= '$password' , fristname='$fristname', lastname='$lastname', location= '$location'  where id = $userid ";
  
  $db->update($sql);
   
  }

}

}

$seemember = new Seemember();

$seemember->adduser();
$seemember->deleteuser();
$seemember->updateuser();
$seemember->seeuser();
$seemember->deleteuser();

?>





<?php 

 class Seeproducts{

    function __construct()
    {

      
    }

    function addproduct()
    {
      $db = new DB();
      extract($_POST);

      if (isset($_POST['productnameSend']) && isset($_POST["modelnameSend"]) && isset($_POST["quantitySend"]) && isset($_POST["priceSend"]))
      {
        $productnameSend = $_POST['productnameSend'];
        $modelnameSend = $_POST["modelnameSend"];
        $quantitySend = $_POST["quantitySend"];
        $priceSend =  $_POST["priceSend"];
 
        $sql = "INSERT INTO `shop_products` (`id`, `productname`, `modelname`, `quantity`, `price`)
          VALUES (NULL,'$productnameSend','$modelnameSend', $quantitySend, $priceSend)";
        $db->insert($sql);
       }



    }

    function deleteproduct()
    {
      $db = new DB();
      extract($_POST);

      if(isset($_POST["deleteuseridSend"]))
     {
      $deleteuseridSend = $_POST["deleteuseridSend"];
      $sql = "delete from shop_products WHERE id = ".$deleteuseridSend."";
      $db->query($sql);
     }

    }


    function seeproduct()
    {
      $db = new DB();
      extract($_POST);

      if(isset($_POST["productupdateid"]))
      {
         $userid = $_POST["productupdateid"];
         $sql = "SELECT * FROM `shop_products` WHERE id= ".$userid."";
         $result = $db->query($sql);
         $response = array();
         while ($row = mysqli_fetch_assoc($result))
         { 
            $response = $row;
         }
    
         echo json_encode($response);
      }

    }

    function updateproduct()
    {
      $db = new DB();
      extract($_POST);
      if(isset($_POST["updateidSend"]))
     {
      $userid = $_POST["updateidSend"];
      $productnameSend = $_POST["updateproductnameSend"];
      $modelnameSend = $_POST["updatemodelnameSend"];
      $quantitySend = $_POST["updatequantitySend"];
      $priceSend = $_POST["updatepriceSend"];



       $sql = "update shop_products set productname= '$productnameSend', modelname= '$modelnameSend' , quantity= $quantitySend , price=$priceSend   where id = $userid ";
  

       $db->update($sql);

      }
     
    }

 }


 $seeproducts = new Seeproducts();
 $seeproducts->addproduct();
 $seeproducts->updateproduct();
 $seeproducts->seeproduct();
 $seeproducts->deleteproduct();


?>




