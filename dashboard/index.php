<?php 
session_start();

// This is dashboard

if (!isset($_SESSION["id"]))
{
   header("location:/shop/index.php");

}

?>