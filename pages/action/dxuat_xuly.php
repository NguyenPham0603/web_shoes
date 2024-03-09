<?php
    session_start();
    if(isset($_SESSION['dangnhap'])){
        
        unset($_SESSION['dangnhap']); //chỉ định xóa 1 session nào đó
        unset($_SESSION['cart']);
        header('Location: ../main/dangnhap.php');
    }
?>