<?php 
      include '../database/connectDB.php';
      if($_SERVER["REQUEST_METHOD"] =="POST"){
        $productName = $_POST['productName'];
        $buyPrice = $_POST['buyPrice'];
        $dissciption = $_POST['dissciption'];
        $categoryID = $_POST['categoryID'];
        $pictureID = $_POST['pictureID'];
        $productID = $_POST['productID'];
       
    
        $query = "UPDATE `quanlybanhang`.`products` 
        SET `productName` = '$productName',
            `buyPrice` = '$buyPrice',
            `dissciption` = '$dissciption',
            `categoryID` = '$categoryID',
            `pictureID`='$pictureID'
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