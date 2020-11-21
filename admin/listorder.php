<?php
include 'header.php';
include 'database/connectDB.php';
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

  <div class="row mb-3 ml-2">
    <h3 class="mb-3 ml-2">Danh Sách Đơn Mua Hàng</h3>
  </div>

  <div class="table-responsive ml-2 ">

    <table class="table table-bordered">
      <thead>
        <tr>

          <th>Mã Khách Hàng</th>
          <th>Mã Sản Phẩm</th>
          <th>Mã Đơn Hàng</th>
          <th>Ngày Đặt Hàng</th> 
          <th>Trạng Thái</th>
          <th>Số Lượng</th>
          <th>giá</th>
          <th>Hành Động</th>


        </tr>
      </thead>
      <tbody>

        <?php
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $value ) :
        ?>
        <tr>
         <td><?= $value['customerID'] ?></td>
          <td><?= $value['productID'] ?></td>
          <td><?= $value['order_id'] ?></td>
          <td><?=$value['orderDate']?></td>
          <td><?=$value['status']?></td>
          <td><?= $value['quantityOrder'] ?></td>
          <td><?= number_format($value['price']) ?></td>
          <td><button type="button" class="btn btn-outline-danger"><a href="removeorder.php?delete=<?= $value['order_id']?>&productID=<?= $value['productID']?>">Delete</a></button>||
            <button type="button" class="btn btn-outline-secondary"><a href="confirm.php?confirm=<?= $value['order_id']?>">confirm</a></button></td>
        </tr>
        <?php endforeach ;?>
    </table>
  </div>
</body>

</html>
<?php include 'footer.php'; ?>