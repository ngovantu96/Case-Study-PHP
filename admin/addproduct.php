<?php 
    include 'header.php';
    include "database/connectDB.php";
    $query = "SELECT * FROM `categorys`";
    $stmt = $pdo->query($query);
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Thêm Mới Sản Phẩm</h1>
                  </div>
                  <form class="user" method="post" action="xulyaddproduct.php">
                  
                    <div class="form-group">
                      <input type="text" class="form-control" aria-describedby="emailHelp"
                        placeholder="Nhập Tên Sản Phẩm " name="productName">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Giá" name="buyPrice">
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control"  placeholder="Số Lượng" name="quantity">
                    </div>
                    <div class="form-group">
                      <!-- <input type="text" class="form-control"  placeholder="Tiêu Đề" name="dissciption"> -->
                      <textarea name="dissciption" id="" cols="30" rows="10"  class="form-control" placeholder="tiêu đề"></textarea>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="sel1" name="categoryID" for="Thể Loại">
                            <?php  foreach($row as $value) : ?>
                              <option value="<?= $value['categoryID']; ?>"><?= $value['categoryName'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <!-- <input type="text" class="form-control"  name="url">  -->
                    <label for="">Ảnh Sản Phẩm</label>
                      <input type="text" class="form-control"  name="image">
                    </div>
                    <!-- <div class="form-group">
                    <label for="">Ảnh Mô Tả</label>
                      <input type="file" class="form-control"  name="images" multiple="multiple">
                    </div>-->
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Thêm Mới</button>
                    </div> 
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php include 'footer.php'; ?>
