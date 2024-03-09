<?php
    include('../../admin/config/config.php');
    include('../../admin/functions/loginErr_Succ.php');
    $sql = "SELECT * FROM hoadon WHERE HD_MA = '".$_GET['mahoadon']."'";
    $connect->query($sql);
    $sql_up = "UPDATE hoadon SET HD_TRANGTHAI = '3' WHERE HD_MA = '".$_GET['mahoadon']."'";
    $connect->query($sql_up);

    success("Đã Xác Nhập Đơn Hàng", "../index_emp.php?act=donhang");
?>