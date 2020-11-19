<?php
include 'header.php';
// include 'xulyaddCustomer.php';
  ?>

<!-- <body class="bg-gradient-login"> -->
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Thêm Mới Khách Hàng</h1>
                  </div>
                  <form class="user" method="post" action="xulyaddCustomer.php">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Tên Khách Hàng" name="customerName">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputPassword" placeholder="email" name="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Mật Khẩu" name="Password">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputPassword" placeholder="Địa Chỉ" name="Address">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputPassword" placeholder="Số Điện Thoại" name="NumberPhone">
                    </div>
                    <div class="form-group">
                      <!-- <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div> -->
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Thêm Mới</button>
                    </div>
                
                  </form>
                  <!-- <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="register.html">Create an Account!</a>
                  </div>
                  <div class="text-center">
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  


<?php include "footer.php"; ?>