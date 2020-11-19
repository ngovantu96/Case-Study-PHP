<?php
    include 'header.php';
    include 'database/connectionDB.php';
?>

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
                            $query = "SELECT * FROM `quanlybanhang`.`products` WHERE `categoryID` ='1';";
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
				</div>
			</div>
		</div>
</section>

<?php include 'footer.php'; ?>