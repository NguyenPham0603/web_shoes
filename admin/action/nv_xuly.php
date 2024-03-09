<?php  
    include('../config/config.php');

    $manv = $_POST['manv'];
    $tennv = $_POST['tennv'];
    $nsinh = $_POST['nsinh'];
    $cccd = $_POST['cccd'];
    $sdt = $_POST['sdt'];
    $dchi = $_POST['dchi'];
    $luong = $_POST['luong'];
    $user = $_POST['user'];
    $pass = strtoupper(bin2hex($_POST['pass']));

    $sql_themsp = "INSERT INTO nhanvien(NV_MA, NV_HOTEN, NV_NGSINH, NV_CCCD, NV_SDT, NV_DCHI, NV_LUONG, NV_USER, NV_PW) 
                    VALUES('".$manv."','".$tennv."', '".$nsinh."', '".$cccd."', '".$sdt."', '".$dchi."', '".$luong."', '".$user."', '".$pass."')";
    if(mysqli_query($connect, $sql_themsp)){
        header('Location: ../ad_index.php?act=quanlynhanvien');
    }else{
        echo("Loi: ".mysqli_error($connect));
   }

   
?>