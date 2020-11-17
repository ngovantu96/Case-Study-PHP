<?php
session_start();
include 'database/connectionDB.php';
// if(isset($_GET['id']))
$id = isset($_GET['id']) ? (int)$_GET['id'] : "";
$quantity = isset($_GET['quantity']) ? (int)$_GET['quantity'] : 1;
$action = (isset($_GET['action'])) ? $_GET['action'] : 'add';

$query = "SELECT * FROM `quanlybanhang`.`sanphammoinhat` WHERE `productID` = '$id'; ";

if ($query) {
    $stmt = $pdo->query($query);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($action == 'add') {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity'] += $quantity;

            var_dump($_SESSION['cart'][$id]['quantity']);
            die();
        } else {
            $item = [
                'id' => $row['productID'],
                'name' => $row['productName'],
                'price' => $row['buyPrice'],
                'image' => $row['url'],
                'quantity' => $quantity
            ];
        }

        $_SESSION['cart'][$id] = $item;
    }
}
if($action == 'update'){
    $_SESSION['cart'][$id]['quantity'] = $quantity;
}

if($action == 'delete'){
    if(isset($_SESSION['cart'][$id])){
    unset($_SESSION['cart'][$id]);
    }  
 }
header('location: view-cart.php');
