<?php
        $host = 'localhost:8080';
        $dbname = 'quanlybanhang';
        $user = 'root';
        $pass = '123456789';
    
        $dns = 'mysql:host='.$host.';dbname='.$dbname;
        $pdo = new PDO($dns, $user, $pass);
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            // $conn->exec("set name utf8");//để đặt lại phông chữ
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
?>