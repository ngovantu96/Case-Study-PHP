<?php 
 session_start();
 include 'header.php';
 include 'database/connectionDB.php';
$cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];

?>
 
    <div class="container">
    <?php  if ( count($_SESSION['cart'])== 0){ ?>
        <div class="row">
                <div class="col-md-6 ml-3 text-aling-center"><img src="images/giohang-empty.jpg" alt="" width="400px" height="500
               0px"></div>
               <div class="cartNull">
                   <h4>Giỏ hàng của bạn đang trống</h4>
                  <div class="buycart"><a href="trangchu.php"><p>Tếp tục mua hàng</p></a></div>
                </div>
        </div>
       
        <h3 class="suggest">Gợi Ý Cho Bạn</h3>
        <hr>
        <div class="row ml-1">
                        <?php 
                            $query = "SELECT * FROM `products` WHERE `categoryID` ='1';";
							$stmt = $pdo->query($query);
							while($row = $stmt->fetch(PDO::FETCH_ASSOC )){  
                                // var_dump($row['productID']);
                        ?>
                        
                        <div class="col-md-3">
					<div class="products">
					<a class="product-img" href="detailproduct.php?id=<?= $row['productID'] ?>">
						<img src="<?= $row['image'] ?>" width="200px" height="250px">
						<p><?= $row['productName'] ?></p>
					</a>
						<p style="color :red"> <?= number_format($row['buyPrice']) ?>đ</p>
						<a href="cart.php?id=<?= $row['productID'] ?>" class="btn btn-default btn-transparent" role="button">
							<button type="button" class="btn btn-outline-primary">Mua Ngay</button>
						</a>

					</div>
					
					<!-- End of /.products -->
				</div>
							<?php } ?>			
						</div> 
    </div>
              <!-- <div class=""><h2>Giỏ Hàng Của Bạn Trống</h2></div>  -->
            <?php } else {  ?>
        <div class="container container_top">
        <div class="row">
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th>Ảnh Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Thành Tiền</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   
                        <tr>
                        <?php
                            $total_price = 0;
                            foreach($cart as $value){   
                            $total_price += ($value['price'] * $value['quantity']);?>
                            <td><img src="<?= $value['image'] ?>" alt="" width="100px" height="100px"></td>
                            <td><?= $value['name'] ?></td>
                            <td>
                            <form action="cart.php" >
                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="id" value="<?= $value['id'] ?>">
                            <input class="quantity" type="text" name="quantity" value="<?= $value['quantity'] ?>">
                            <input type="submit" class="btn btn-primary btn-sm" value="Câp Nhật">
                            </form>
                            </td>
                            <td><?= number_format($value['price']) ?>đ</td>
                            <td><?= number_format($value['price'] * $value['quantity']) ?>đ</td>
                            <td><a href="cart.php?id=<?= $value['id'];?>&action=delete" class="btn btn-danger btn-sm">Xóa</a></td>
                        </tr>
                        <?php } ?>
                    <tr>
                        <td>Tổng Tiền</td>
                        <td colspan="6" class="text-center bg-info"><?= number_format($total_price) ?>đ</td>
                    </tr>
                   
                </tbody>
            </table>
           
            </div>
        </div>        
    </div>
    <div class="container container-form mb-5">
        <div class="row">
            <div class="col-lg-12">
            <form action="buycart.php" method="POST">
                    <div class="form-group">
                    <div class="form-group">
                        <input type="hidden" name="id">
                        <label for="exampleInputPassword1">Tên Người Nhận</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="vui lòng nhập số điện thoại" name="name">
                    </div>
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="vui lòng nhập địa chỉ email" name="email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Số Điện Thoại</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="vui lòng nhập số điện thoại" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Địa Chỉ</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="vui lòng nhập địa chỉ" name="address">
                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="Đặt Hàng">
            </form>
            </div>
          
        </div>
        </div>
       
        </div>  
        <?php } ?>
        <?php include 'footer.php'; ?>          

