<?php 
   session_start();
  include 'database/connectionDB.php';
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $email = $_POST['email'];
     $password = $_POST['password'];
 
     $query = "SELECT `email`, `password` FROM `customers` 
     WHERE `email`='$email'  AND `password`='$password';";
     
     $stmt = $pdo->query($query);
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
          if($email == $row['email'] && $password ==  $row['password']){
             $_SESSION['username'] = $row;
            //     var_dump( $_SESSION['username']);die();
             header('Location: index.php');
         } else{
            header('location: login.php');
         }
   }
?> 
