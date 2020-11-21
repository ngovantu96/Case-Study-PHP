<?php 
include 'database/connectDB.php';
    if(isset($_GET['confirm'])){
        $id = $_GET['confirm'];
        $text = 'đã xác nhận';
        $query = "UPDATE `orders` SET `status`= '$text'  WHERE `orderID` = '$id';";
    }
    try{
        $pdo->query($query);
         if($query){
             header("location: listorder.php");
         }
     }catch(Exception $e){
        echo $e->getMessage();
     }
?>