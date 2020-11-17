<?php
    include "header.php";
    include "database/connectDB.php";

    $query = "SELECT * FROM quanlybanhang.customers";
    $stmt = $pdo->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>
<body>
              <div class="row mb-3 ml-2">
                          
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                              <div class="card-body">
                                <div class="row align-items-center">
                                  <div class="col mr-5">
                                  <a class="dropdown-item align-items-center" href="addCustomer.php">Thêm Mới Khách Hàng</a>
                                  </div>
                                
                                </div>
                              </div>
                            </div>
                          </div>
              </div>
              <div class="col-lg-12">
                <div class="card mb-2">
              <table class="table align-items-center table-flush">
                    <!-- <thead class="thead-light"> -->
                      <tr>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Hành Động</th>
                      </tr>
                   
                    <?php
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC )){
                     ?>
                            <tr>
                                <td><?=$row['customerID']?></td>
                                <td><?=$row['customerName']?></td>
                                <td><?=$row['email']?></td>
                                <td><?=$row['password']?></td>
                                <td><?=$row['address']?></td>
                                <td><?=$row['phone']?></td>
                                

                                <td><button type="button" class="btn btn-outline-secondary"><a href="editCustomer.php?id=<?=$row['customerID']?>">Edit</a></button> || 
                                <button type="button" class="btn btn-outline-danger"><a href="removeCustomer.php?id=<?= $row['customerID']?>">Delete</a></button></td>
                
                            </tr>
                
                        <?php } ?>
                    <!-- </thead> -->
                </table>
                  
                </div>
              </div>
            </div>
</body>
</html>

<?php include "footer.php";
