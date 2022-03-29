<?php 
 //ini_set('display_errors', 1);
include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");

class Emailcheck{

    function __construct()
    {
        
    }

    function check()
    {
        $db = new DB();
        extract($_POST);

        if(isset($_POST["recoveryemailSent"]))
        {
            
            $sql = "SELECT email from shop_users WHERE email = '$recoveryemailSent'  && uid = 1";
            $result = $db->query($sql);
            if(mysqli_num_rows($result))
            {
                echo json_encode(1);

            }
            else{
                  
                echo json_encode(0);
            }
         
        }
    }
}
   
$email = new Emailcheck();
$email->check();

?> 

