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
                    <div class="col-md-3 clearfix ml-3 mt-2">
                        <ul class="login">
                            <li><i class="fa fa-user mt-2"></i>

                                <a href="logout.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    <?php if (isset($_SESSION['username'])) {
                                        echo  $_SESSION['username']['email']; ?>
                                </button>
                                </a>
                                <!-- The Modal -->
                                <!-- <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                           
                                            <div class="modal-header">
                                                <h4 class="modal-title">Bạn Có Muốn Đăng Xuất Không ?</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="#"><button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                                                <a href="logout.php"><button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
                                            </div>

                                        </div>
                                    </div>
                                </div> -->

                            <?php  } else { ?>

                                <a href="register.php">
                                <?php echo "Đăng Nhập/Đăng Kí";
                                    } ?>
                                </a>
                            </li>
                        </ul>
                    </div>



                    <!-- gỏi hàng -->
                    <div class="col-md-2 ml-2 mt-2 " style="font-size: 25px;" id="cart">
                        <button type="button" class="btn btn-outline-success">
                            <a href="viewcart.php "><i class="fa fa-shopping-cart mt-2"></i>
                                <span style="color:white">
                                    Giỏ Hàng <?php if (isset($_SESSION['cart'])) {
                                        $qty = 0;
                                        echo count($_SESSION['cart']);
                                    } else {
                                        echo "";
                                    };
                                    ?>
                                </span>
                        </button></a>
                    </div>
        </section>

        <!-- thanh menu bar -->
        <nav class="navbar navbar-expand-lg navbar-light nav-bar">
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


                <form class="form-inline my-2 my-lg-0" action="search.php?action=search " method="post">
                    <input class="form-control mr-sm-2" type="search" placeholder="Tìm Kiếm" aria-label="Search" name="keyword">
                    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" value="Tim Kiếm">
                </form>

            </div>
        </nav>
    </div>