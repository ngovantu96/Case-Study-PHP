<?php 
    include 'database/connectDB.php';
    $query = "SELECT * FROM categorys";
    $stmt = $pdo->query($query);
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

      //  $customerID = $_POST['customerID'];
  if($_SERVER['REQUEST_METHOD']=="POST"){
        $categoryName = $_POST['categoryName'];
        $query = "INSERT INTO `categorys` (`categoryName`)
        VALUES ('$categoryName')";
      
  }
      try{
            $pdo->query($query);
          if($query){
              header("location:listcategory.php");
          }
      }catch(Exception $e){
          echo $e->getMessage();
      }
?>