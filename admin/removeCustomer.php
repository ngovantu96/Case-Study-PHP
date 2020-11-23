<?php 
    include "database/connectDB.php";
    if($_GET['id']){
        $customerID = $_GET['id'];
        $query = "DELETE  FROM `customers` WHERE `customerID` = '$customerID';";
        // $query1 = "DELETE  FROM `orders` WHERE `customerID` = '$customerID';";
        
        // $stmt = $pdo->query($query);
        // $row = $stmt->fetch(PDO::FETCH_ASSOC);
            try{
                $pdo->query($query);
                 if($query){
                     header("location: customer.php");
                 }
             }catch(Exception $e){
                echo $e->getMessage();
             }
        }

        