<?php
// session_start();

include 'header.php';
include 'database/connectionDB.php';
?>

<!-- SLIDER Start
    ================================================== -->

<!-- <div class="slider-area"> -->
<div class="container mt-10">
	<div class="row">
		<div class="col-md-6 col-lg-12">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="images/slider3.jpg" class="d-block w-100" height="650px">
					</div>
					<div class="carousel-item">
						<img src="images/slider4.jpg" class="d-block w-100" height="650px">
					</div>
					<div class="carousel-item">
						<img src="images/slider3.jpg" class="d-block w-100" height="650px">
					</div>
					<div class="carousel-item">
						<img src="images/slider4.jpg" class="d-block w-100" height="650px">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div> <!-- End of /.container -->
<!-- </div> -->

<!-- chia cột -->
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
						$query = "SELECT * FROM `quanlybanhang`.`sanphammoinhat` LIMIT 4";

						$stmt = $pdo->query($query);

						while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

						?>
							<div class="col-sm-4 col-md-3">
								<div class="product-new">
									<a class="product-img" href="">
										<img src="<?= $row['url'] ?>" width="200px" height="250px">
										<h5><?= $row['productName'] ?></h5>
									</a>
									<p><?= number_format($row['buyPrice']) ?>đ</p>
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

					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<hr>

<section id="product-list">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block-heading">
					<h2>Danh Sách Sản Phẩm</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php

			$result = "SELECT count(productID) AS `total` FROM `quanlybanhang`.`sanphammoinhat`;";
			$row = $pdo->query($result)->fetch(PDO::FETCH_ASSOC);
			$total_records = $row['total'];
			$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
			$limit = 4;
			$total_page = ceil($total_records / $limit);
			// var_dump($total_page);die();

			if ($current_page > $total_page) {
				$current_page = $total_page;
			} else if ($current_page < 1) {
				$current_page = 1;
			}

			$start = ($current_page - 1) * $limit;
			// die(var_dump($total_records));

			$query = "SELECT * FROM `quanlybanhang`.`sanphammoinhat` LIMIT $start, $limit ";
			$stmt = $pdo->query($query);
			//  var_dump($query);die();
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			?>
				<div class="col-md-3">
					<div class="products">
						<a class="product-img" href="">
							<img src="<?= $row['url'] ?>" width="200px" height="250px">
							<h5><?= $row['productName'] ?></h5>
						</a>
						<p> <?= number_format($row['buyPrice']) ?>đ</p>
						<a href="detailproduct.php?id=<?= $row['productID'] ?>" class="btn btn-default btn-transparent" role="button">
							<button type="button" class="btn btn-outline-primary">Xem Chi Tiết</button>
						</a>
						<a href="cart.php?id=<?= $row['productID'] ?>" class="btn btn-default btn-transparent" role="button">
							<button type="button" class="btn btn-outline-primary">Mua Ngay</button>
						</a>

					</div>
					<hr>
					<!-- End of /.products -->
				</div>
			<?php } ?>
			<div class="pagination-bottom mt-3 ml-5">
				<ul class="pagination">
					<?php if ($current_page > 1 && $total_page > 1) { ?>
						<li class="page-item"><a class="page-link" href="index.php?page=<?= ($current_page - 1) ?>">Previous</a></li>
					<?php } ?>
					<?php for ($i = 1; $i <= $total_page; $i++) { ?>
						<?php if ($i == $current_page) { ?>
							<li class="page-item"><a class="page-link" href="#"><?= $i ?></a></li>
						<?php	 } else { ?>
							<li class="page-item"><a class="page-link" href="index.php?page=<?= $i ?>"><?= $i ?></a></li>
						<?php } ?>
					<?php } ?>
					<?php
					if ($current_page < $total_page && $total_page > 1) { ?>
						<li class="page-item"><a class="page-link" href="index.php?page=<?= ($current_page + 1) ?>">Next</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>

</section>



<!-- End of Section -->

<hr>
<?php include 'footer.php'; ?>
</body>

</html>
