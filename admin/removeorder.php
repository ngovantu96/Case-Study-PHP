<?php 
    include 'database.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE * FROM (((`quanlybanhang`.`orders` INNER JOIN `quanlybanhang`.`customers` 
        ON `orders`.`customerID` = `customers`.`customerID`)
        INNER JOIN `quanlybanhang`.`orderdetails` ON `orderdetails`.`orderID` = `orders`.`orderID`)
        INNER JOIN `quanlybanhang`.`status` ON `orders`.`statusID`= `status`.`statusID`) 
        INNER JOIN `quanlybanhang`.`products` ON `products`.`productID`= `orderdetails`.`productID` WHERE `ID` = '$id'";
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