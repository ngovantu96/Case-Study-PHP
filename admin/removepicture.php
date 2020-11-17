<?php 
        include 'database/connectDB.php';
        if(isset($_GET['id'])){
            $urlID = $_GET['id'];
            $query = "DELETE FROM `quanlybanhang`.`pictures` WHERE `pictureID` = '$urlID'";
        }
         
        try{
            $pdo->query($query);
             if($query){
                 header("location: Listpicture.php");
             }
         }catch(Exception $e){
            echo $e->getMessage();
         }