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
            $query = "SELECT * FROM `quanlybanhang`.`sanphammoinhat` WHERE `productID`='$productID'";
           
            $stmt = $pdo->query($query);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
         <div class="row">
         <form action="cart.php" method="get">
            <div class="col-6">
                <img src="<?= $row['url']?>" alt="" width="250px" height="300px" name="image"></div>
               <input type="hidden" name="id" value="<?= $row['productID']?>">
            <div class="col-6 float">
            <h3 class="title"> <?= $row['productName'] ?></h3>
            <p><?= $row['dissciption'] ?></p>
            <div>
                <input type="number" name="quantity" value="1" min=1>
            </div>
            <button type="submit" class="btn btn-outline-primary">Mua Ngay</button>
            </div>
        </div>
    </div>
    <div class="block-heading">
    </div>
    <?php include 'footer.php'; ?>