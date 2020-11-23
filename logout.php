<?php 
    session_start();
    if(isset($_SESSION['username'])){
        unset($_SESSION['username']);
        // var_dump($_SESSION['username']);die();
        header('location:trangchu.php');
    }
    
?>