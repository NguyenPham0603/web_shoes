<?php
    include('../../admin/config/config.php');
    include('../../admin/functions/loginErr_Succ.php');
    $sql_del = "SELECT * FROM chitiethoadon WHERE HD_MA = '".$_GET['id']."' AND TRANGTHAI = 1";
    $result = mysqli_query($connect, $sql_del);
    if($result){
        $sql_up = "UPDATE hoadon SET HD_TRANGTHAI = '5' WHERE HD_MA = '".$_GET['id']."'";
        $connect->query($sql_up);
        $sql_del_bill = "SELECT * FROM hoadon WHERE HD_MA = '".$_GET['id']."' AND HD_TRANGTHAI = 1";
        $connect->query($sql_del_bill);
        success('Hủy Thành Công', '../index.php?quanly=lichsu');
    }
    else{
        error('Hủy Không Thành Công', 'index.php?quanly=donhangchitiet&id="'.$_GET['id'].'"');
    }
?>