<?php 
   
    include 'database/connectionDB.php';
    session_start();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';

    $quantity = (isset($_GET['quantity'])) ?  $_GET['quantity'] : '1';
   
   $query = "SELECT * FROM `quanlybanhang`.`sanphammoinhat` WHERE `productID` = '$id'; ";
   if($query){
    $stmt = $pdo->query($query);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
   }

    $item = [
        'id'=>$row['productID'],
        'name'=>$row['productName'],
        'price'=>$row['buyPrice'],
        'image'=>$row['url'],
        'quantity'=>$quantity
    ];
   
    if($action ==='add'){
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['quantity'] += $quantity;
        }else{
            $_SESSION['cart'][$id] = $item;
        }
    }
    if($action === 'update'){
        $_SESSION['cart'][$id]['quantity'] = $quantity;
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        if($_SESSION['cart'][$id]){
        unset($_SESSION['cart'][$id]);
        header("Location: cart.php");
        // count($_SESSION['cart']) == 0;
        // var_dump( count($_SESSION['cart']));die();
        }
        // var_dump( count($_SESSION['cart']))
     }
    
    
    
    header("location: view-cart.php");
    
?>
 