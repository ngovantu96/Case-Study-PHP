<?php 
    include 'header.php';
    include './database/connectionDB.php';
     session_start();
    $cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
    $index = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-10">
        <div class="row">
            <div class="table-responsive mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
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
                            <td><?= ++$index ?></td>
                            <td><img src="<?= $value['image'] ?>" alt="" width="100px" height="100px"></td>
                            <td><?= $value['name'] ?></td>
                            <td>
                            <form action="cart.php" >
                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="id" value="<?= $value['id'] ?>">
                            <input type="text" name="quantity" value="<?= $value['quantity'] ?>">
                            <button type="submit" class="btn btn-primary btn-sm">Câp Nhật</button>
                            </form>
                            </td>
                            <td><?= number_format($value['price']) ?>đ</td>
                            <td><?= number_format($value['price'] * $value['quantity']) ?>đ</td>
                            <td><a href="cart.php?delete=<?= $value['id']?>" class="btn btn-danger btn-sm">Xóa</a></td>
                        </tr>
                        <?php } ?>
                    <tr>
                        <td>Tổng Tiền</td>
                        <td colspan="6" class="text-center bg-info"><?= number_format($total_price) ?></td>
                    </tr>
                   
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
include 'footer.php'; ?>