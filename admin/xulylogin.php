<?php 

session_start();
  include 'database/connectDB.php';
  
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT `employeeName`, `password` FROM `employees` 
    WHERE `employeeName`='$username'  AND `password`='$password';";
     
    $stmt = $pdo->query($query);
    $row = $stmt->fetch();
    
         if($username == $row['employeeName'] && $password ==  $row['password']){
            $_SESSION['user'] = $row;
           
        }
            header('Location: index.php');
        } else{
           header('location: login.php');
  }
  
    

  
  ?>