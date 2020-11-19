<?php 
    include 'database/connectDB.php';
    $query = "SELECT * FROM quanlybanhang.products";
  
    // $stmt = $pdo->query($query);
    // $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $productName = $_POST['productName'];
        $buyPrice = $_POST['buyPrice'];
        $dissciption = $_POST['dissciption'];
        $quantity = $_POST['quantity'];
        $categoryID = $_POST['categoryID'];
        $image = $_POST['image'];

        
   $query  = "INSERT INTO `quanlybanhang`.`products` (`productName`, `buyPrice`, `dissciption`, `image`, `categoryID`, `quantity`)
   VALUES ('$productName', '$buyPrice', '$dissciption', '$image', '$categoryID', '$quantity')";

       try{
            $pdo->query($query);
           if($query){
               header("location: Listproduct.php");
           }
       }catch(Exception $e){
           echo $e->getMessage();
       }
    }