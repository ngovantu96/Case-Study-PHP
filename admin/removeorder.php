<?php 
    include 'database/connectDB.php';
    if(isset($_GET['delete']) && isset($_GET['productID'])){
        $delete = $_GET['delete'];
        $productID =  $_GET['productID'];
        // var_dump($productID);die();
        $query = "DELETE FROM `orderdetails`
         WHERE `order_id` = '$delete' AND `productID` = '$productID';";
    //    var_dump($query);die();
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