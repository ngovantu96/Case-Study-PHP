<?php
session_start();
include 'database/connectionDB.php';
if (isset($_SERVER['REQUEST_METHOD']) == "POST") {
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $name = $_POST['name'];
}

  $query = "INSERT INTO `quanlybanhang`.`customers` 
        (`email`, `phone`,`customerName`,`address`)
        VALUES ('$email', '$phone','$name','$address')";
  $pdo->query($query);
  $customerID = $pdo->lastInsertId();
  //  var_dump($customerID);die();
  $InsertOrder = "INSERT INTO `quanlybanhang`.`orders`(customerID) VALUES ('$customerID')";
  $pdo->query($InsertOrder);
  $orderID = $pdo->lastInsertId();

  // var_dump($orderID);die();

  foreach ($_SESSION['cart'] as $id => $value) {
    $conn = "select * from `quanlybanhang`.`products` where `productID` = '$id';";
    $product = $pdo->query($conn);
    $row = $product->fetch(PDO::FETCH_ASSOC);
    $qty = $value['quantity'];
    $price = $row['buyPrice'];

    $InsertDetail = "INSERT INTO `quanlybanhang`.`orderdetails`(`order_id`,`productID`,`quantityOrder`,`price`) 
          VALUES('$orderID','$id','$qty','$price') ";
    $pdo->query($InsertDetail);
  }
  //  var_dump($InsertDetail);die();
  if ($query) {
    unset($_SESSION['cart']);
    header("location: trangchu.php");
  }
