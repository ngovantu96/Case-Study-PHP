<?php
    include 'header.php';
    include 'database/connectionDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section id="product">
	<div class="product">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<div class="block-heading">
						<h2>Sản Phẩm Mới Nhất</h2>
					</div>
					<div class="row ml-1">
                        <?php 
                            $query = "SELECT * FROM `quanlybanhang`.`trangphucnu` WHERE `categoryID` = 1;";
							$stmt = $pdo->query($query);
							
							while($row = $stmt->fetch(PDO::FETCH_ASSOC )){  
                                // var_dump($row['productID']);
                        ?>
                        
							<div class="col-sm-4 col-md-3">
								<div class="product-new">
									<a class="product-img" href="">
										<img src="<?= $row['url']?>" width="200px" height="250px">
										<h3><?= $row['productName'] ?></h3>
									</a>
									<p> Giá Bán : <?=number_format($row['buyPrice']) ?></p>
									<div class="caption">		
										<p>
											<a href="detailproduct.php?id=<?=$row['productID'];?>" class="btn btn-default btn-transparent" role="button">
											<button type="button" class="btn btn-outline-primary">Xem Chi Tiết</button>
											</a> 
											<a href="cart.php?id=<?=$row['productID'];?>" class="btn btn-default btn-transparent" role="button">
											<button type="button" class="btn btn-outline-primary">Mua Ngay</button>
											</a> 
										</p>
									</div>
								</div>
							</div>
							<?php } ?>			
						</div> 				 
					</div>
				</div>
			</div>
		</div>
</section>
</body>
</html>
<?php include 'footer.php'; ?>