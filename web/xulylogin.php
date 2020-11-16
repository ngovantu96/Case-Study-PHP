<?php 
   session_start();
   include '../admin/database/connectDB.php';
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $username = $_POST['username'];
     $password = $_POST['password'];
 
     $query = "SELECT `email`, `password` FROM `quanlybanhang`.`customers` 
     WHERE `email`='$username'  AND `password`='$password';";
      
     $stmt = $pdo->query($query);
     $row = $stmt->fetch();
     
          if($username == $row['email'] && $password ==  $row['password']){
             $_SESSION['user'] = $row;
            
         }
             header('Location: product.php');
         } else{
            header('location: index.php');
   }
   
?> 
