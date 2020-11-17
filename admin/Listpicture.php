<?php 
    include '../header.php';
    include '../database/connectDB.php';
    $query = "SELECT * FROM `quanlybanhang`.`pictures`";
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
                          <h3 class="mb-3 ml-2">Danh Sách Hình Ảnh</h3>
              </div>
              
              <div class="row mb-3 ml-2">
                          
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                              <div class="card-body">
                                <div class="row align-items-center">
                                  <div class="col mr-5">
                                  <a class="dropdown-item align-items-center" href="addpicture.php">Thêm Mới Hình Ảnh</a>
                                  </div>
                                
                                </div>
                              </div>
                            </div>
                          </div>
              </div>
              <div class="table-responsive-sm ml-2 ">
                       
                       <table class="table table-bordered">
                    <!-- <thead class="thead-light"> -->
                      <tr>
                        <th>Mã Hình Ảnh</th>
                        <th>Hình Ảnh</th>
                        <th>Hành Động</th>
                      </tr>
                   
                    <?php
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC )){
                     ?>
                            <tr>
                                <td><?=$row['pictureID']?></td>
                                <td><img src="<?=$row['url']?>" width="150px" height="200px"></td>
                                <td>
                                <button type="button" class="btn btn-outline-danger"><a href="removepicture.php?id=<?= $row['pictureID']?>">Delete</a></button></td>
                
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