<?php
    include('../config/config.php');
    include('../functions/loginErr_Succ.php');
    $sql = "SELECT * FROM hoadon WHERE HD_MA = '".$_GET['mahoadon']."'";
    $connect->query($sql);
    $sql_up = "UPDATE hoadon SET NV_MA = '".$_GET['manhanvien']."', HD_TRANGTHAI = '2' WHERE HD_MA = '".$_GET['mahoadon']."'";
    $connect->query($sql_up);
    
    success("Đã Duyệt Đơn Hàng", "../ad_index.php?act=quanlydonhang");
?>