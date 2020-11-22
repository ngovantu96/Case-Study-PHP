<?php
session_start();
if (empty($_SESSION['user'])) {
  header('location: login.php');
}

include "database/connectDB.php";
// $query = "SELECT `customerID`,`order_id`,`productID`,`quantityOrder`,`price`,`status`,`orderDate`
// FROM `orderdetails` INNER JOIN `orders` ON `orderdetails`.`order_id` = `orders`.`orderID`;";
// $stmt = $pdo->query($query);
?>

<?php include 'header.php'; ?>

        <!-- đơn hàng -->
    <hr>
    <div class="row">
         <div class="col-xl-3 col-md-4 mb-4 ml-2">
              <div class="card h-100">
                <div class="card-body bg-primary">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                    <a href="listorder.php">
                      <div class="text-xs font-weight-bold text-uppercase ml-4"><h4 class="text-white">Đơn Hàng</h4> 
                       </div>
                       </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           
          
          <!-- sản phẩm -->
          <div class="col-xl-3 col-md-4 mb-4 ml-2">
              <div class="card h-100">
                <div class="card-body bg-warning">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                    <a href="Listproduct.php">
                      <div class="text-xs font-weight-bold text-uppercase ml-4"><h4 class="text-white">Sản Phẩm</h4> 
                       </div>
                       </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- khách hàng -->
            <div class="col-xl-3 col-md-4 mb-4 ml-2">
              <div class="card h-100">
                <div class="card-body bg-danger">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                    <a href="customer.php">
                      <div class="text-xs font-weight-bold text-uppercase ml-4"><h4 class="text-white">Khách Hàng</h4> 
                       </div>
                       </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </div> 
<!-- Footer -->
<?php include "footer.php" ?>