<?php
session_start();
if (empty($_SESSION['user'])) {
  header('location: login.php');
}
include "header.php";
include "database/connectDB.php";
$query = "SELECT `customerID`,`order_id`,`productID`,`quantityOrder`,`price`,`status`,`orderDate`
FROM `orderdetails` INNER JOIN `orders` ON `orderdetails`.`order_id` = `orders`.`orderID`;";
$stmt = $pdo->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  
</body>

</html>
<!-- Footer -->
<?php include "footer.php" ?>