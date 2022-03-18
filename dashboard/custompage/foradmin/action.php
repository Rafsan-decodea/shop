<?php

session_start();
   // ini_set('display_errors', 1);
 include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");

$db = new DB();

 extract($_POST);

 if(isset($_POST["emailSend"]) && isset($_POST["passwordSend"]) && isset($_POST["fristnameSend"])
  && isset($_POST["lastnameSend"]) && isset($_POST["locationSend"]))
  {

  
    $testsql = "SELECT `email` FROM `shop_users` WHERE `email` = '".$emailSend."'";
    $select = $db->query($testsql);

    if(mysqli_num_rows($select)) {
      header("location:/shop/index.php?message=User Email Already Exist");
      exit();
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
     $sql = "SELECT `email` FROM `shop_users` WHERE id= $userid ";
     $result = $db->query($sql);
     $response = array();
     while ($row = mysqli_fetch_assoc($result))
     { 
        $response = $row;
     }

     echo json_encode($response);
  }

?>