<?php 
    include 'database/connectDB.php';
    $query = "SELECT * FROM quanlybanhang.products";
  
    // $stmt = $pdo->query($query);
    // $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $productName = $_POST['productName'];
        $buyPrice = $_POST['buyPrice'];
        $dissciption = $_POST['dissciption'];
        $categoryID = $_POST['categoryID'];
        $pictureID = $_POST['url'];
        $query = "INSERT INTO `quanlybanhang`.`products` (`productName`, `buyPrice`,`dissciption`,`pictureID`,`categoryID`)
        VALUES ('$productName', '$buyPrice','$dissciption','$pictureID','$categoryID')";
    //     var_dump($query);die();
        
     }

       

       try{
            $stmt = $pdo->query($query);
           if($query){
               header("location: listproduct.php");
           }
       }catch(Exception $e){
           echo $e->getMessage();
       }
    