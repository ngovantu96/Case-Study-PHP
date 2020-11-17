<?php 
    include 'header.php';
    include 'database/connectDB.php';
    
    $result ="SELECT count(productID) AS `total` FROM `quanlybanhang`.`sanphammoinhat`;";
    $row = $pdo->query($result)->fetch(PDO::FETCH_ASSOC);
    $total_records = $row['total'];
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 6;
    $total_page = ceil($total_records / $limit);
    // var_dump($total_page);die();

    if ($current_page > $total_page){
      $current_page = $total_page;
    }
    else if ($current_page < 1){
      $current_page = 1;
    }
  
    $start = ($current_page - 1) * $limit;

    $query = "SELECT `productID`,`productName`,`buyPrice`,`dissciption`,`url`,`categoryName` 
    FROM ((`quanlybanhang`.`products` INNER JOIN `quanlybanhang`.`pictures` ON `pictures`.`pictureID` = `products`.`pictureID`)
    INNER JOIN `quanlybanhang`.`categorys` ON `categorys`.`categoryID` = `products`.`categoryID`) LIMIT $start, $limit";
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

<!-- <div class="row justify-content-center"> -->
      <div class="col-xl-6 col-lg-12 col-md-9 mb-2"> 
           <button type="button" class="btn btn-outline-dark"><a href="addproduct.php">Thêm Mới Sản Phẩm</a></button>
      </div>
<!-- </div>                   -->
              <div class="table-responsive ml-3">
                       
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th>Mã Sản Phẩm</th>
                        <th>Hình Ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá Bán</th>
                        <th>Tiêu Đề</th>
                        <th>Thể Loại</th>
                        <th>Hành Động</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                     ?>
                            <tr>
                                <td><?=$row['productID']?></td>
                                <td><img src="<?=$row['url']?>" alt="" width="100px" height="150px"></td>
                                <td><?=$row['productName']?></td>
                                <td><?=number_format($row['buyPrice'])?>đ</td>
                                <td><?=$row['dissciption']?></td>
                                <td><?=$row['categoryName']?></td>
                                <td><button type="button" class="btn btn-outline-secondary"><a href="editproduct.php?id=<?=$row['productID']?>">Edit</a></button> || 
                                <button type="button" class="btn btn-outline-danger"><a href="removeproduct.php?id=<?= $row['productID']?>">Delete</a></button></td>
                
                            </tr>
                
                        <?php } ?>
                  </tbody>
                </table>
              </div>
            
					<div class="pagination-bottom ml-5">
           <ul class="pagination">
           <ul class="pagination">
							 <?php if ($current_page > 1 && $total_page > 1){ ?>
							<li class="page-item"><a class="page-link" href=" Listproduct.php?page=<?=($current_page-1)?>">Previous</a></li>
							<?php } ?>
							<?php for ($i = 1; $i <= $total_page; $i++){ ?>
								<?php 	if ($i == $current_page){ ?>
								<li class="page-item"><a class="page-link" href="#"><?= $i ?></a></li>
								  <?php	 }  else{ ?>
										<li class="page-item"><a class="page-link" href="Listproduct.php?page=<?= $i ?>"><?= $i ?></a></li>
									<?php } ?>
								<?php } ?>
							<?php
								if ($current_page < $total_page && $total_page > 1){ ?>
								 <li class="page-item"><a class="page-link" href="Listproduct.php?page=<?= ($current_page+1)?>">Next</a></li>
								<?php } ?>						 
							</ul>
             </ul>
					</div>
              

           
</body>
</html>


<?php include 'footer.php'; ?>
