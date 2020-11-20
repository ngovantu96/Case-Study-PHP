<?php
      session_start();
      include 'database/connectionDB.php';
      if (isset($_SERVER['REQUEST_METHOD']) == "POST") {
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $name = $_POST['name'];


        $query = "INSERT INTO `quanlybanhang`.`customers` 
        (`email`, `phone`,`customerName`,`address`)
        VALUES ('$email', '$phone','$name','$address')";
        $pdo->query($query);
        $customerID = $pdo->lastInsertId();
        //  var_dump($customerID);die();
        $InsertOrder = "INSERT INTO `quanlybanhang`.`orders`(customerID) VALUES ('$customerID')";
        $pdo->query( $InsertOrder);
        $orderID = $pdo->lastInsertId();

        // var_dump($orderID);die();

        foreach($_SESSION['cart'] as $id=>$value){
          $qty = $value['quantity'];
          $price = $value['price'];
        }
         $totalprice = $qty*$price;
          $InsertDetail = "INSERT INTO `quanlybanhang`.`orderdetails`(`orderID`,`productID`,`quantityOrder`,`price`,`totalMonney`) 
          VALUES('$orderID','$id','$qty','$price','$totalprice') ";
        //  var_dump($InsertDetail);die();
          $pdo->query($InsertDetail);
           
          header("location: index.php");
      }
      ?>
  

     
     

