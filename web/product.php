<?php
include 'header.php';
include '../admin/database/connectDB.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="products-heading">
						<h2>NEW PRODUCTS</h2>
					</div> <!-- End of /.Products-heading -->
					<div class="product-grid">
						<?php
						$query = "SELECT * FROM `quanlybanhang`.`sanphammoinhat`";

						$stmt = $pdo->query($query);

						while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

						?>
							<div class="col-sm-4 col-md-3">
								<div class="product-new">
									<a class="product-img" href="">
										<img src="<?= $row['url'] ?>" width="200px" height="250px">
										<h3><?= $row['productName'] ?></h3>
									</a>
									<p> Giá Bán : <?= number_format($row['buyPrice']) ?>đ</p>
									<div class="caption">
										<p>
											<a href="detailproduct.php?id=<?= $row['productID']; ?>" class="btn btn-default btn-transparent" role="button">
												<button type="button" class="btn btn-outline-primary">Xem Chi Tiết</button>
											</a>
										</p>
										<p>
											<a href="cart.php?id=<?= $row['productID']; ?>" class="btn btn-default btn-transparent" role="button">
												<button type="button" class="btn btn-outline-primary">Mua Ngay</button>
											</a>
										</p>
									</div>
								</div>
							</div>
						<?php } ?>

					</div> <!-- End of /.products-grid -->

					<!-- Pagination -->

					<!-- <div class="pagination-bottom ">
                         <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                         </ul>
					</div> -->
				</div> <!-- End of /.col-md-9 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<h4>Catagories</h4>
							<div class="list-group">
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Italian Foods
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Traditional Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Indian Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Spanish Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Thai FoodN
								</a>
							</div>
						</div>
						<div class="block">
							<img src="images/food-ad.png" alt="">
						</div>
						<div class="block">
							<h4>Latest Food Items</h4>
							<ul class="media-list">
								<li class="media">
									<a class="pull-left" href="#">
										<img class="media-object" src="images/post-img.png" alt="...">
									</a>
									<div class="media-body">
										<a href="" class="media-heading">Lamb leg roast
											<p>Lorem ipsum dolor sit amet.</p></a>
									</div>
								</li>
								<li class="media">
									<a class="pull-left" href="#">
										<img class="media-object" src="images/post-img-2.png" alt="...">
									</a>
									<div class="media-body">
										<a href="" class="media-heading"> Lamingtons
											<p>Lorem ipsum dolor.</p></a>
									</div>
								</li>
								<li class="media">
									<a class="pull-left" href="#">
										<img class="media-object" src="images/post-img-3.png" alt="...">
									</a>
									<div class="media-body">
										<a href="" class="media-heading">
											Anzac Salad
											<p>Lorem ipsum dolor sit.</p>

										</a>
									</div>
								</li>
							</ul>
						</div>

						<div class="block">
							<h4>Food Tag</h4>
							<div class="tag-link">
								<a href="">BALLET</a>
								<a href="">CHRISTMAS</a>
								<a href="">ELEGANCE</a>
								<a href="">ELEGANT</a>
								<a href="">SHOPPING</a>
								<a href="">SHOP</a>
							</div>
						</div>
					</div> <!-- End of /.col-md-3 -->

				</div> <!-- End of /.row -->
			</div> <!-- End of /.container -->
	</section> <!-- End of Section -->











	<!-- FOOTER Start
    ================================================== -->
	<hr>
</body>

</html>
<?php include 'footer.php'; ?>