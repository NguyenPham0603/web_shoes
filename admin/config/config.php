<?php
    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
    $data = 'mysqli_project';
    
    $connect = mysqli_connect ($host, $user, $pass, $data) or die ('Không thể kết nối tới database');
    mysqli_set_charset($connect, 'UTF8');
    
?>