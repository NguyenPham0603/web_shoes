<?php
    include('../config/config.php');
    include('../functions/loginErr_Succ.php');
    $sql_del = "DELETE FROM chitiethoadon WHERE HD_MA = '".$_GET['code']."' AND TRANGTHAI = 1";
    $result = mysqli_query($connect, $sql_del);
    if($result){
        $sql_del_bill = "DELETE FROM hoadon WHERE HD_MA = '".$_GET['code']."' AND HD_TRANGTHAI = 5";
        $connect->query($sql_del_bill);
        success('Xóa Thành Công', '../ad_index.php?act=quanlydonhang');
    }
    else{
        error('Xóa Không Thành Công', 'ad_index.php?act=quanlydonhangchitiet&code="'.$_GET['code'].'"');
    }
?>