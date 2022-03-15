<?php 
session_start();

// This is dashboard

if (!isset($_SESSION["id"]))
{
   header("location:/shop/index.php");

}

echo $_SESSION["uid"];

session_destroy();




?>