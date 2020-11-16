<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="contact-action"><i class="fas fa-phone-alt mr-2"></i>HOTLINE <strong>+565 975 658</strong></p>
                </div>
                <div class="col-md-3 clearfix ml-2 mt-2">
                    <ul class="login">
                        <li>
                            <a data-toggle="modal" data-target="#myModal" href="#">
                                <i class="fa fa-user mt-2"></i>
                                Đăng Nhập/Đăng Kí
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- gỏi hàng -->
                <div class="col-md-2 ml-2 mt-1 " style="font-size: 25px;" id="cart">
                <button type="button" class="btn btn-outline-success">
                    <a href="view-cart.php "><i class="fa fa-shopping-cart mt-2"></i>
                        <span>(
                            <?php if (isset($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                                } else {
                                echo "(0)";
                                    };
                            ?>
                        )</span>
                </button></a>		  			
                </div>

                <div class="col-md-3 clearfix">

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel"></h4>
                                </div>
                                <div class="modal-body clearfix">

                                    <form action="#" method="post" id="create-account_form" class="std">
                                        <fieldset>
                                            <h3>Đăng Kí Tài Khoản</h3>
                                            <div class="form_content clearfix">
                                                <!-- <h4>vui lòng điền đầy đủ thông tin</h4> -->
                                                <p class="text">
                                                    <label for="email_create">Tên Đăng Nhập</label>
                                                    <span>
                                                        <input placeholder="E-mail-Tên Đăng kí" type="text" id="email_create" name="email_create" class="account_input ml-1">
                                                    </span>
                                                </p>
                                                <p class="text">
                                                    <label for="email_create">Mật Khẩu</label>
                                                    <span>
                                                        <input placeholder="Mật Khẩu" type="password" id="email_create" name="email_create" class="account_input ml-5">
                                                    </span>
                                                </p>
                                                <p class="submit">
                                                    <button class="btn btn-primary">Đăng Kí</button>
                                                </p>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <form action="xulylogin.php" method="post" id="login_form" class="std">
                                        <fieldset>
                                            <h3>Bạn Đã Có Tài Khoản</h3>
                                            <div class="form_content clearfix">
                                                <p class="text">
                                                    <label for="email">Tên Đăng Nhập</label>
                                                    <span><input placeholder="E-mail-Tài Khoản" type="text" id="email" name="username" value="" class="account_input ml-1"></span>
                                                </p>
                                                <p class="text">
                                                    <label for="passwd">Mật Khẩu</label>
                                                    <span><input placeholder="Password" type="password" id="passwd" name="password" value="" class="account_input ml-5"></span>
                                                </p>
                                                <p class="lost_password">
                                                    <a href="#popab-password-reset" class="popab-password-link">Quên Mật Khẩu</a>
                                                </p>
                                                <p class="submit">
                                                    <button class="btn btn-success">Đăng Nhập</button>
                                                </p>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>

                    </div>

    </section>

    <!-- thanh menu bar -->
    <nav class="navbar navbar-expand-lg navbar-light nav-bar" >
        <a class="navbar-brand" href="#">TiMiStore.Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active ml-5 ">
                    <a class="nav-link" href="index.php">Trang Chủ</a>
                </li>
                <li class="nav-item active ml-5 ">
                    <a class="nav-link" href="#">Giới Thiệu</a>
                </li>
                <li class="nav-item dropdown ml-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        Sản Phẩm
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="categoryboy.php">Trang Phục Nam</a>
                        <a class="dropdown-item" href="categorygirl.php">Trang Phục Nữ</a>
                </li>
                <li class="nav-item active ml-5 ">
                    <a class="nav-link" href="#">Liên Hệ</a>
                </li>
                <!-- <li class="nav-item active ml-5 mt-2 ">
		      <a href="#"><i class="fa fa-shopping-cart ml-2"></i></a>		  			
      </li> -->
            </ul>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Tìm Kiếm" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tim Kiếm</button>
            </form>

        </div>
    </nav>
</div>