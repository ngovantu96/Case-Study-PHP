<?php
        include '../header.php';
        include '../database/connectDB.php';
        // `productName`, `buyPrice`,`dissciption`,`pictureID`,`categoryID`
        if($_GET['id']){
            $productID = $_GET['id'];
            $query = "SELECT *
             FROM `quanlybanhang`.`products` WHERE `productID` = '$productID';";

            $stmt = $pdo->query($query);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
           
        }
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
                    <h1 class="h4 text-gray-900 mb-4">Thay Đổi Thông Tin Sản Phẩm</h1>
                  </div>
                  <form class="user" method="post" action="xulyeditproduct.php">
                  <input type="hidden" class="form-control" aria-describedby="emailHelp" name="productID" value="<?= $productID?>">
                    <div class="form-group">
                      <input type="text" class="form-control" aria-describedby="emailHelp"
                        placeholder="Nhập Tên Sản Phẩm " name="productName" value="<?= $row['productName']?>">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Giá" name="buyPrice" value="<?= $row['buyPrice']?>">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Tiêu Đề" name="dissciption" value="<?= $row['dissciption']?>">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Mã Thể Loại" name="categoryID" value="<?= $row['categoryID']?>">
                       <!-- <select class="form-control" id="sel1" name="sellist1" for="Thể Loại">
                            <php foreach ($row as $value) : ?>
                                <option value="<= $value['categoryID']; ?>"><= $value['categoryName'] ?></option>
                            <php endforeach ?> -->

                        </select>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Mã Hình Ảnh" name="pictureID" value="<?= $row['pictureID']?>">
                    </div>
                    <div class="form-group">
                     
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Cập Nhật</button>
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