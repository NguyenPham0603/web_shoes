<?php  
    include('../config/config.php');

    $mancc = $_POST['mancc'];
    $tenncc = $_POST['tenncc'];
    $sdt = $_POST['sdt'];
    $dchi = $_POST['dchi'];

    $sql_them = "INSERT INTO nhacungcap(NCC_MA, NCC_TEN, NCC_SDT, NCC_DIACHI) 
                    VALUES('".$mancc."','".$tenncc."', '".$sdt."', '".$dchi."')";
    if(mysqli_query($connect, $sql_them)){
        header('Location: ../ad_index.php?act=quanlynhacungcap');
    }else{
        echo("Loi: ".mysqli_error($connect));
   }

   
?>