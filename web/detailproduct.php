<?php 
    include 'header.php';
    include 'database/connectionDB.php';
    session_start();
    if(isset($_GET['id'])){
        $productID = $_GET['id'];
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
    <div class="container-detail">
    <div class="block-heading">
        <h2>Chi Tiết Sản Phẩm</h2>
    </div>
       
        <?php 
            $query = "SELECT * FROM `quanlybanhang`.`sanphammoinhat` WHERE `productID`='$productID'";
           
            $stmt = $pdo->query($query);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        
        <div  class="col-md-3">
        <form action="cart.php" method="get">
            <img src="<?= $row['url']?>" alt="" width="250px" height="300px" name="image"> 
        </div>
        <div class="col-md-6 ml-2">
        <input type="number" name="quantity" value="1">
        <input type="hidden" name="id" value="<?= $row['productID']?>">
        <!-- <a href="cart.php?id=<= $row['productID'];?>" class="btn btn-default btn-transparent" role="button"> -->
        <button type="submit" class="btn btn-outline-primary">Mua Ngay</button>
        
        </a>
        </div>
        <div name="name">
            <?= $row['productName'] ?></h3>
        </div>
        </form>
        <div>
            <p><?= $row['dissciption'] ?></p>
        </div>
        
    </div>
   
   
   
    <div class="block-heading">
    </div>
</body>
</html>
<?php include 'footer.php'; ?>