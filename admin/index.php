<?php 
    session_start();
    if(empty($_SESSION['user'])){
      header('location: login.php');
    }
      include "header.php";
      include "database/connectDB.php";

     

?>


 <!-- Footer -->
 <?php include "footer.php" ?>
    
  
      