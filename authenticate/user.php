<?php 

   // ini_set('display_errors', 1);
 include ($_SERVER['DOCUMENT_ROOT']."/shop/database/db.php");

  $db = new DB();
  $sql = "select * from shop_users";
  $result = $db->query($sql);

  while ($row = $result->fetch_assoc()) {
   echo "<br>".$row['email']."<br>";
}
  
   if($_POST["username"]=="rafsan")
   {
?>

   <p> yes you are login</p>

<?php 

   }

  else
  {

?>

  <p> you are not login</p>


  <?php 
    
  }

  ?>