<?php 
    include '../header.php';
    include '../database/connectDB.php';
    $query = "SELECT * FROM quanlybanhang.categorys";
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
                          <h3 class="mb-3 ml-2">Danh Sách Loại Hàng</h3>
              </div>
              
              <div class="row mb-3 ml-2">
                          
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                              <div class="card-body">
                                <div class="row align-items-center">
                                  <div class="col mr-5">
                                  <a class="dropdown-item align-items-center" href="addcategory.php">Thêm Mới Loại Hàng</a>
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
                        <th>Category ID</th>
                        <th>Category Name</th>
                      </tr>
                   
                    <?php
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC )){
                     ?>
                            <tr>
                                <td><?=$row['categoryID']?></td>
                                <td><?=$row['categoryName']?></td>
                                <td><button type="button" class="btn btn-outline-secondary"><a href="editcategory.php?id=<?=$row['categoryID']?>">Edit</a></button> || 
                                <button type="button" class="btn btn-outline-danger"><a href="removecategory.php?id=<?= $row['categoryID']?>">Delete</a></button></td>
                
                            </tr>
                
                        <?php } ?>
                    <!-- </thead> -->
                </table>
                  
                </div>
              </div>
            </div>
</body>
</html>


<?php include '../footer.php'; ?>