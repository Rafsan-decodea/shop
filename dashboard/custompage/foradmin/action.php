<?php

  // Start Seemember.php Section 
?>

<?php



session_start();
   // ini_set('display_errors', 1);
 include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");

$db = new DB();

 extract($_POST);

 if(isset($_POST["emailSend"]) && isset($_POST["passwordSend"]) && isset($_POST["fristnameSend"])
  && isset($_POST["lastnameSend"]) && isset($_POST["locationSend"]))
  {


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
    
    $finalresult = $db->insert($sql);


  }

}


 ?>


<?php

if(isset($_POST["deleteuseridSend"]))
{
     echo "<script>alert('press')</script";
      $sql = "delete from shop_users WHERE id = ".$deleteuseridSend."";
      $db->query($sql);
}

?>

<?php 

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

?>

<?php 

if(isset($_POST["updateidSend"]))
{
  $userid = $_POST["updateidSend"];
  $email = $_POST["updateemailSend"];
  $password = $_POST["updatepasswordSend"];
  $fristname = $_POST["updatefristnameSend"];
  $lastname = $_POST["updatelastnameSend"];
  $location = $_POST["updatelocationSend"];


  $sql = "update shop_users set email= '$email', password= '$password' , fristname='$fristname', lastname='$lastname', location= '$location'  where id = $userid ";
  
  $db->update($sql);

  exit();


}


?>

<?php // End ?>

<?php // Start seeproduct.php Section ?>


<?php


$db = new DB();

extract($_POST);

if (isset($_POST['productnameSend']) && isset($_POST["modelnameSend"]) && isset($_POST["quantitySend"]) && isset($_POST["priceSend"]))
{

  $sql =  "INSERT INTO `shop_products` (`id`, `productname`, `modelname`, ``, `quantity`, `price`) 
  VALUES (NULL,'".$productnameSend."','".$modelnameSend."', '".$quantitySend."', '".$priceSend."')";
  
  $finalresult = $db->insert($sql);
  echo json_encode(error_reporting());


}
else
{

}

?>


