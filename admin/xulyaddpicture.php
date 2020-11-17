<?php 
    include 'database/connectDB.php';
    $query = "SELECT * FROM quanlybanhang.pictures";
    $stmt = $pdo->query($query);
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $url = $_POST['url'];
        $query = "INSERT INTO `quanlybanhang`.`pictures` (`url`) VALUES ('$url');";
        
        try{
            $pdo->query($query);
            if($query){
                header("location:Listpicture.php");
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
     