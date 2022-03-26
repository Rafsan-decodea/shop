<?php 
session_start();
// ini_set('display_errors', 1);
include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");

class Seeproduct{

    function __construct()
    {
        
    }

    function fetch_prouct()
    {
        $db = new DB();
        extract($_POST);

        if(isset($_POST["productSend"]))
        {
            $sql = "SELECT modelname,price FROM `shop_products` WHERE productname = '$productSend'";
            //$sql2 = "SELECT * FROM `shop_products`";
            $seechek = $db->query($sql);
            $response = array();
            while ($row = mysqli_fetch_all($seechek))
            { 
               $response = $row;
            }
        
            echo json_encode($response);
             //echo $response;

        }

    }

    function order_product()
    {
        $db = new DB();
        extract($_POST);

        if(isset($_POST["orderproductSend"]) && isset($_POST["orderproductbrandSend"]) && isset($_POST["orderquantitySend"]))
        {
           

        }



    }

}

 $seeproduct = new Seeproduct();
 $seeproduct->fetch_prouct();

?>