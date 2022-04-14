<?php 

session_start();
// ini_set('display_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . "/shop/database/db.php";



$db = new DB();
//extract($_POST);
if(isset($_SESSION["id"])){

$uid = $_SESSION["id"];
$modelname = $_GET["modelname"];
$quantity = $_GET["quantity"];
$productname = $_GET["productname"];

$sql3 = "SELECT quantity from shop_products where modelname= '$modelname' & productname= '$productname' ";
$fetchquantity = $db->query($sql3);
$fetchresult = mysqli_fetch_array($fetchquantity);
$mainquantity = $fetchresult["quantity"]; // Fetch Quantity Of Specific Product
$sql1 = "update shop_products set quantity= $mainquantity - $quantity where modelname= '$modelname' & productname= '$productname'";
echo $sql1;
$sql = "UPDATE shop_orders set acceptrequest = 1 WHERE userid = $uid ";

die();
$db->query($sql);
$db->query($sql1);
header("location:/shop/dashboard/custompage/forusers/seeproduct.php?message= Payment Sucessfully Complete");

}
header("location:/shop/dashboard/custompage/forusers/seeproduct.php");


?>