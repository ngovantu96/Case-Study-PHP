<?php 
  include 'header.php';
  include 'database/connectionDB.php';
  if(isset($_GET['action']) && ($_GET['action'] == 'search')){
      if(isset($_REQUEST['search'])){
        $search = $_POST['keyword'];
        // var_dump($searc);exit;
      }
    }
	$query = "SELECT * FROM `quanlybanhang`.`sanphammoinhat` where `productName` LIKE '%$search%';";
	$stmt = $pdo->query($query);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<?php ?>
<section id="product">
	<div class="product">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<div class="block-heading">
						<h2>Sản Phẩm </h2>
					</div>
					<div class="row ml-1">
						<?php
						if(!$query){ ?>
							<h3>không tìm thấy sản phẩm</h3>
						<?php }else{ 
                             while($row = $stmt->fetch(PDO::FETCH_ASSOC )){ ?>
							<div class="col-sm-4 col-md-3">
								<div class="product-new">
									<a class="product-img" href="">
										<img src="<?= $row['url']?>" width="200px" height="250px">
										<h5><?= $row['productName'] ?></h5>
									</a>
									<p> Giá Bán : <?=number_format($row['buyPrice'])?>đ</p>
									<div class="caption">		
						         	<p>
									 <a href="detailproduct.php?id=<?= $row['productID'] ?>" class="btn btn-default btn-transparent" role="button">
									<button type="button" class="btn btn-outline-primary">Xem Chi Tiết</button>
									</a> 
									<a href="cart.php?id=<?= $row['productID'] ?>" class="btn btn-default btn-transparent" role="button">
									<button type="button" class="btn btn-outline-primary">Mua Ngay</button>
									</a> 
									</p>
								</div>
							</div>
						</div>
							<?php } ?>
							 <?php } ?>
						</div> 
							 
					</div>
				</div>
			</div>
		</div>
</section>
</body>
</html>
<?php 
    include 'footer.php';
?>