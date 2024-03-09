<?php
    session_start();
    if(isset($_SESSION['username'])){
        unset($_SESSION['username']); //chỉ định xóa 1 session nào đó
        header('Location: ../login.php');
    }
    
?>