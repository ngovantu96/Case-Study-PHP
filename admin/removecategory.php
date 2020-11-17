<?php 
    include 'database/connectDB.php';
    if(isset($_GET['id'])){
        $categoryID = $_GET['id'];
        $query = "DELETE FROM `quanlybanhang`.`categorys` WHERE `categoryID` = '$categoryID'";
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