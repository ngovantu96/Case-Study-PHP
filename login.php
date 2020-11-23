<?php 
    session_start();
    include 'database/connectionDB.php';
    // if($_SERVER['REQUEST_METHOD']=='POST'){
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     $query = "SELECT `email`, `password` FROM `quanlybanhang`.`customers`;";
    //     $stmt = $pdo->query($query);
    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
    //     if ($password != $row['password']) {
    //         echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //         exit;
    //     }
    //     if($email == $row['email'] && $password == $row['password']){
    //             $_SESSION['username'] = $email;
            
    //     }
    //     header('location: trangchu.php');
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<!-- <link rel="stylesheet" type="text/css" href="css/util.css"> -->
<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
<span class="login100-form-title-1">
Đăng Nhập
</span>
</div>
<form class="login100-form validate-form" method="post" action="xulylogin.php" >
<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
<span class="label-input100">Email</span>
<input class="input100" type="text" name="email" placeholder="Enter Email">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
<span class="label-input100">Password</span>
<input class="input100" type="password" name="password" placeholder="Enter password">
<span class="focus-input100"></span>
</div>
<div class="container-login100-form-btn login">
<button class="login100-form-btn">
Đăng Nhập
</button>
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
