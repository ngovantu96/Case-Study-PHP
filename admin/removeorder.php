<?php 
    include 'database/connectDB.php';
    if(isset($_GET['delete'])){
        $delete = $_GET['delete'];
        $query = "DELETE * FROM `quanlybanhang`.`oderdetails`
         WHERE `order_id` = '$delete' AND `productID` = '$productID';";
       
        try{
            $pdo->query($query);
             if($query){
                 header("location: listorder.php");
             }
         }catch(Exception $e){
            echo $e->getMessage();
         }
      }
?>