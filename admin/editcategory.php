<?php 
    include 'header.php';
    include 'database/connectDB.php';
    if($_GET['id']){
        $categoryID = $_GET['id'];
        $query = "SELECT `categoryName` FROM `categorys` WHERE `categoryID` = '$categoryID';";
        $stmt = $pdo->query($query);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // var_dump($row);die();
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
                    <h1 class="h4 text-gray-900 mb-4">Sửa Thể Loại</h1>
                  </div>
                  <form class="user" method="post" action="xulyeditcategory.php">
                  <input type="hidden" name="categoryID" value="<?= $categoryID?>">
                    <div class="form-group">
                      <input type="text" class="form-control" 
                        placeholder="Tên Thể Loại " name="categoryName" value="<?= $row['categoryName']; ?>">
                    </div>
                    <!-- <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputPassword" placeholder="email" name="Email">
                    </div>
                     -->
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
<?php include 'footer.php'; ?>

