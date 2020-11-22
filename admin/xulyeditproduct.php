<?php 
      include 'database/connectDB.php';
      if($_SERVER["REQUEST_METHOD"] =="POST"){
        $productName = $_POST['productName'];
        $buyPrice = $_POST['buyPrice'];
        $dissciption = $_POST['dissciption'];
        $categoryID = $_POST['categoryID'];
        $image = $_POST['image'];
        $productID = $_POST['productID'];
        $quantity = $_POST['quantity'];
       
    
        $query = "UPDATE `products` 
        SET `productName` = '$productName',
            `buyPrice` = '$buyPrice',
            `dissciption` = '$dissciption',
            `categoryID` = '$categoryID',
            `quantity` = '$quantity',
            `image`='$image'
        WHERE (`productID` = '$productID');";
    }
   
       
     try{
        $pdo->query($query);
         if($query){
             header("location: Listproduct.php");
         }
     }catch(Exception $e){
        echo $e->getMessage();
     }