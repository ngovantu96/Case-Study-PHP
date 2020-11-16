<?php 
    include '../header.php';
    include '../database/connectDB.php';
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
                    <h1 class="h4 text-gray-900 mb-4">Thêm Mới Thể Loại</h1>
                  </div>
                  <form class="user" method="post" action="xulyaddcategory.php">
                    <div class="form-group">
                      <input type="text" class="form-control" 
                        placeholder="Tên Thể Loại " name="categoryName" >
                    </div>
                    <!-- <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputPassword" placeholder="email" name="Email">
                    </div>
                     -->
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