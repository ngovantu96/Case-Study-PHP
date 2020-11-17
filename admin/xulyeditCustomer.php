<?php 
     include 'database/connectDB.php';
        if($_SERVER["REQUEST_METHOD"] =="POST"){
        $customerName = $_POST['customerName'];
        $customerID = $_POST['customerID'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Address = $_POST['Address'];
        $NumberPhone = $_POST['NumberPhone'];
    
        $query = "UPDATE `quanlybanhang`.`customers` 
        SET `customerName` = '$customerName',
            `email` = '$Email',
            `password` = '$Password',
            `address` = '$Address',
            `phone`='$NumberPhone'
        WHERE (`customerID` = '$customerID');";
    }
       
     try{
        $pdo->query($query);
         if($query){
             header("location: customer.php");
         }
     }catch(Exception $e){
        echo $e->getMessage();
     }
        
?>
