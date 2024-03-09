<?php
    session_start();
    if(isset($_SESSION['username_emp'])){
        unset($_SESSION['username_emp']); //chỉ định xóa 1 session nào đó
        
        header('Location: ../login_employee.php');
    }
    
?>