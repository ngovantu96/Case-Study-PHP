<?php 
    include 'header.php';
    include 'database/connectionDB.php';
    // session_start();
    if(isset($_GET['id'])){
        $productID = $_GET['id'];
    }
?>


    <div class="container-detail">
    <div class="block-heading">
        <h2>Chi Tiết Sản Phẩm</h2>
    </div>
       
        <?php 
            $query = "SELECT * FROM `quanlybanhang`.`products` WHERE `productID`='$productID'";
           
            $stmt = $pdo->query($query);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 ">
                <img src="<?= $row['image']?>" alt="" width="250px" height="300px" name="image">
            </div>
            <input type="hidden" name="id" value="<?= $row['productID']?>">
            <div class="col-lg-6">
                <h3 class="title"> <?= $row['productName'] ?></h3>
                <p><?= $row['dissciption'] ?></p>
                <form action="cart.php" method="get">
                    <input type="hidden" name="id" value="<?= $row['productID']?>">
                <input class="quantity" type="number" name="quantity" value="1" min=1>
                <input type="submit" class="btn btn-outline-primary" value="Mua Ngay">
                </form>
            </div>
            </div>
    </div>
    </div>
    <!-- <div class="block-heading">
    </div> -->
    <!-- <php include 'footer.php'; ?> -->