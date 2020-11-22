<?php
    include "header.php";
    include "database/connectDB.php";
    $query = "SELECT `employeeName`,`phone`,`email`,`address`,`levelID`,`lastLogin`, `loginName`,`password` 
    FROM `employees`;";
   
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
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Quản Lý Nhân Viên</h1>
            
        </div>

        <div class="table-responsive ml-1">
                       
                       <table class="table table-bordered">
                         <thead>
                           <tr>
                               <th>Tên Nhân Viên</th>
                               <th>Số Điện Thoại</th>
                               <th>Email</th>
                               <th>Địa Chỉ</th>
                               <th>Thời Gian Đăng nhập</th>
                               <th>Tên Đăng Nhập</th>
                               <th>Mật Khẩu</th>
                               <!-- <th>Hành Động</th> -->
                           </tr>
                         </thead>
                         <tbody>
                                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC )){
                                    ?>
                                            <tr>
                                                <td><?=$row['employeeName']?></td>
                                                <td><?=$row['phone']?></td>
                                                <td><?=$row['email']?></td>
                                                <td><?=$row['address']?></td>
                                                <td><?=$row['lastLogin']?></td>
                                                <td><?=$row['loginName']?></td>
                                                <td><?=$row['password']?></td>
                                                <!-- <td><button type="button" class="btn btn-outline-secondary mt-1"><a href="editCustomer.php?id=<=$row['customerID']?>">Edit</a></button> || 
                                                <button type="button" class="btn btn-outline-danger mt-1"><a href="removeCustomer.php?id=<= $row['customerID']?>">Delete</a></button></td> -->
                                
                                            </tr>
                                
                                        <?php } ?>
                         </tbody>
                </table>
                  
               
            </div>
 </body>
 </html>        

<?php include "footer.php";
