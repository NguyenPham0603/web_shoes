<?php
    include('../config/config.php');
    $id = $_POST['manv'];
    $tennv = $_POST['tennv'];
    $nsinh = $_POST['nsinh'];
    $cccd = $_POST['cccd'];
    $sdt = $_POST['sdt'];
    $dchi = $_POST['dchi'];
    $luong = $_POST['luong'];
    $user = $_POST['user'];
    $pass = strtoupper(bin2hex($_POST['pass']));
    $sql_sua = "UPDATE nhanvien 
                SET NV_HOTEN = '".$tennv.
                "', NV_NGSINH = '".$nsinh.
                "', NV_CCCD = '".$cccd.
                "', NV_SDT = '".$sdt.
                "', NV_DCHI = '".$dchi.
                "', NV_LUONG = '".$luong.
                "', NV_USER = '".$user.
                "', NV_PW = '".$pass.
                "' WHERE NV_MA ='".$id."'";
    if($connect->query($sql_sua) === TRUE){
        echo '<script>
                alert ("Chinh sua thanh cong");
                window.location ="../ad_index.php?act=quanlynhanvien";       
             </script>';        

    }
    else{
        echo $sql_sua;
        echo '</br><a href="../ad_index.php?act=quanlynhanvien"> quay về</a>';
        // echo '<script>
        //         alert ("Chinh sua khong thanh cong");
        //         window.location ="../ad_index.php?act=quanlynhanvien";       
        //      </script>';    
    }

    $connect->close();
?>