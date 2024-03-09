<?php
    include('../../admin/config/config.php');
    include('../../admin/functions/loginErr_Succ.php');
    $sql = "SELECT * FROM hoadon WHERE HD_MA = '".$_GET['mahoadon']."'";
    $connect->query($sql);
    $sql_up = "UPDATE hoadon SET HD_TRANGTHAI = '4' WHERE HD_MA = '".$_GET['mahoadon']."'";
    $connect->query($sql_up);

    $sql_chitiet = "SELECT * FROM chitiethoadon WHERE HD_MA = '".$_GET['mahoadon']."'";
    $connect->query($sql_chitiet);
    $sql_chitiet_up = "UPDATE chitiethoadon SET TRANGTHAI = '2' WHERE HD_MA = '".$_GET['mahoadon']."'";
    $connect->query($sql_chitiet_up);
    success("Đã Xác Nhập Đơn Hàng", "../index.php?quanly=lichsu");
    
?>