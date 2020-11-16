<?php
      include '../database/connectDB.php';
      $query = "SELECT * FROM quanlybanhang.customers";
      $stmt = $pdo->query($query);
      $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
        //  $customerID = $_POST['customerID'];
    if($_SERVER['REQUEST_METHOD']=="POST"){
          $customerName = $_POST['customerName'];
          $Email = $_POST['Email'];
          $Password = $_POST['Password'];
          $Address = $_POST['Address'];
          $NumberPhone = $_POST['NumberPhone'];
    
  
          $query = "INSERT INTO `quanlybanhang`.`customers` (`customerName`, `email`,`password`,`address`,`phone`)
          VALUES ('$customerName', '$Email','$Password','$Address','$NumberPhone')";
        
    }
        try{
              $pdo->query($query);
            if($query){
                header("location:customer.php");
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
  ?>