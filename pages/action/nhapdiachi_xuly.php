<?php
    session_start();
    include('../../admin/config/config.php');
    if(isset($_POST['diachigh'])){
        $sql_kh = "SELECT * FROM khachhang WHERE KH_USER = '".$_SESSION['dangnhap']."'";
        $result_kh = mysqli_query($connect, $sql_kh);
        $row = mysqli_fetch_array($result_kh);

        $sql_up = "UPDATE khachhang SET KH_DCHI = '".$_POST['thongtindchi']."' WHERE KH_USER = '".$_SESSION['dangnhap']."'";
        $connect->query($sql_up);

        $_SESSION['diachi'] = $_POST['thongtindchi'];
    }
    else{
        $_SESSION['diachi'] = $row['KH_DCHI'];

    }
    header('Location: ../main/thanhtoan.php');
?>