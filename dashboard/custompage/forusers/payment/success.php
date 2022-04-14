<?php 

session_start();
// ini_set('display_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . "/shop/database/db.php";



$db = new DB();

if(isset($_SESSION["id"])){

$uid = $_SESSION["id"];

$sql = "UPDATE shop_orders set acceptrequest = 1 WHERE userid = $uid ";
$db->query($sql);
header("location:/shop/dashboard/custompage/forusers/seeproduct.php");

}
header("location:/shop/dashboard/custompage/forusers/seeproduct.php");


?>