<?php 
    include 'database/connectDB.php';
    if(isset($_GET['id'])){
        $productID = $_GET['id'];

        $query = "DELETE FROM `products` WHERE `productID`='$productID';";
        
    }
    try{
        $pdo->query($query);
         if($query){
             header("location: Listproduct.php");
         }
     }catch(Exception $e){
        echo $e->getMessage();
     } 