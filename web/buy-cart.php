<?php 
include 'database/connectionDB.php';
if(isset($_SERVER['REQUEST_METHOD'])=="POST"){
  $email = $_POST['email']  ;
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $name = $_POST['name'];

  $query = "INSERT INTO `quanlybanhang`.`customers` 
  (`email`, `phone`,`customerName`,`address`)
  VALUES ('$email', '$phone','$name','$address')";
}
// var_dump($query);die();
try{
    $stmt = $pdo->query($query);
   if($query){
       header("location: index.php");
   }
}catch(Exception $e){
   echo $e->getMessage();
}
?>