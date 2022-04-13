<?php
session_start();
// ini_set('display_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . "/shop/database/db.php";

class Seeproduct
{

    public function __construct()
    {

    }

    public function fetch_prouct()
    {
        $db = new DB();
        extract($_POST);

        if (isset($_POST["productSend"])) {
            $sql = "SELECT modelname,price FROM `shop_products` WHERE productname = '$productSend'";
            //$sql2 = "SELECT * FROM `shop_products`";
            $seechek = $db->query($sql);
            $response = array();
            while ($row = mysqli_fetch_all($seechek)) {
                $response = $row;
            }

            echo json_encode($response);
            //echo $response;

        }

    }

    public function order_product()
    {
        $db = new DB();
        extract($_POST);

        if (isset($_POST["orderproductSend"]) && isset($_POST["orderproductbrandSend"]) && isset($_POST["orderquantitySend"])) {
            // SELECT id from shop_products where productname = "mobile"
            $user = $_SESSION["id"];
            $query1 = "select id from shop_products where modelname = '$orderproductbrandSend' ";
            $result1 = $db->query($query1);
            $modelid = "";
            while ($row = mysqli_fetch_row($result1)) {
                $modelid = $row;
            }

            $sql = "INSERT INTO `shop_orders` (`id`,  `userid`, `productid`,`orderdate`, `quantity`, `acceptrequest`)
            VALUES (NULL, $user,$modelid[0],CURRENT_TIMESTAMP,$orderquantitySend,2 )";
            $db->insert($sql);

            //echo json_encode($_SESSION["id"]);

        }

    }

    public function cancelorder()
    {
        $db = new DB();
        extract($_POST);
        if (isset($_POST["ordercancelidSend"])) {
            $ordercancelidSend = $_POST["ordercancelidSend"];
            $sql = "delete from shop_orders WHERE id = " . $ordercancelidSend . "";
            $db->query($sql);
        }

    }

}

$seeproduct = new Seeproduct();
$seeproduct->fetch_prouct();
$seeproduct->order_product();
$seeproduct->cancelorder();
