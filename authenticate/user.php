

<?php 

   ini_set('display_errors', 1);

   echo(__FILE__."../database/db.php");

  $db = new DB();
  echo( $db->query());
  
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