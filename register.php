<?php 
	include 'database/connectionDB.php';
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$username   = $_POST['username'];
    $password   = $_POST['password'];
    $email      = $_POST['email'];
    $address    = $_POST['address'];
    $phone      = $_POST['phone'];
	
	$addcustomer = " INSERT INTO `customers` (`customerName`,`password`,`email`,`address`,`phone`)
    VALUE ('$username','$password','$email','$phone','$address');";
    // var_dump($addcustomer);die();
    
    
    // if($addcustomer){
        try{
            $stmt = $pdo->query($addcustomer);
           if($addcustomer){
               header("location: login.php");
           }
       }catch(Exception $e){
           echo $e->getMessage();
       }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V15</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />



<!-- <link rel="stylesheet" type="text/css" href="css/util.css"> -->
<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
<span class="login100-form-title-1">
Đăng Kí Tài Khoản
</span>
</div>
<form class="login100-form validate-form" method="post">
<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required" >
<span class="label-input100">FullName</span>
<input class="input100" type="text" name="username" placeholder="Enter username">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required" >
<span class="label-input100">Email</span>
<input class="input100" type="text" name="email" placeholder="Enter Email">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
<span class="label-input100">Password</span>
<input class="input100" type="password" name="password" placeholder="Enter password">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-18" data-validate="address is required">
<span class="label-input100">Địa Chỉ</span>
<input class="input100" type="text" name="address" placeholder="Enter address">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
<span class="label-input100">Số Điện Thoại</span>
<input class="input100" type="text" name="phone" placeholder="Enter phone">
<span class="focus-input100"></span>
</div>

<div class="container-login100-form-btn login">
<button class="login100-form-btn">
Đăng Kí
</button>
</div>
<div class="container signin">
    <p>Bạn Đã Có Tài Khoản? <a href="login.php">Đăng Nhập</a>.</p>
</div>
</form>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
