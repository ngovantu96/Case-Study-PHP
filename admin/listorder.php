<?php 
    include 'header.php';
    include 'database/connectDB.php';
    $query = "SELECT `orderCode`, `orderDate`,`discount`, `customerName`, `quantity`,`buyPrice`,`statusName`,`totalMonney` 
    FROM (((`quanlybanhang`.`orders` inner join `quanlybanhang`.`customers` 
    on `orders`.`customerID` = `customers`.`customerID`)
    inner join `quanlybanhang`.`orderdetails` on `orderdetails`.`orderID` = `orders`.`orderID`)
    inner join `quanlybanhang`.`status` on `orders`.`statusID`= `status`.`statusID`) ;";
    $stmt = $pdo->query(($query));
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
              
              <div class="row mb-3 ml-2">
                          
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                              <div class="card-body">
                                <div class="row align-items-center">
                                  <div class="col mr-5">
                                  <a class="dropdown-item align-items-center" href="addproduct.php">Thêm Mới Đơn Hàng</a>
                                  </div>
                                
                                </div>
                              </div>
                            </div>
                          </div>
              </div>
              <div class="table-responsive ml-2 ">
                       
                       <table class="table table-bordered">
                         <thead>
                         <tr>
                        <th>Mã Đơn Hàng</th>
                        <th>Tên Khách Hàng</th>
                        <th>Ngày Đặt Hàng</th>
                        <th>Số Lượng</th>
                        <th>Tổng Tiền</th>
                        <th>Giảm Giá</th>
                        <th>Trạng Thái</th>
                        <th>Hành Động</th>
                       
                      </tr>
                         </thead>
                         <tbody>
                   
                    <?php
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC )){
                     ?>
                            <tr>
                                <td><?=$row['orderCode']?></td>
                                <td><?=$row['customerName']?></td>
                                <td><?=$row['orderDate']?></td>
                                <td><?=$row['quantity']?></td>
                                <td><?=$row['totalMonney']?></td>
                                <td><?=$row['discount']?></td>
                                <td><?=$row['statusName']?></td>
                                
                                <td><button type="button" class="btn btn-outline-secondary"><a href="editproduct.php?id=<?=$row['productID']?>">Edit</a></button> || 
                                <button type="button" class="btn btn-outline-danger"><a href="removeproduct.php?id=<?= $row['productID']?>">Delete</a></button></td>
                
                            </tr>
                
                        <?php } ?>
                    <!-- </thead> -->
                </table>
                  
               
            </div>
</body>
</html>
<?php include 'footer.php'; ?>