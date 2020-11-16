<?php 
    include '../database/connectDB.php';
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $categoryID = $_POST['categoryID'];
        $categoryName = $_POST['categoryName'];
        $query = "UPDATE `quanlybanhang`.`categorys` 
        SET `categoryName` = '$categoryName'
        WHERE (`categoryID` = '$categoryID');";
    }
    
       
     try{
        $pdo->query($query);
         if($query){
             header("location: listcategory.php");
         }
     }catch(Exception $e){
        echo $e->getMessage();
     }
?>