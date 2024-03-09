<?php
    include('../config/config.php');
    $id = $_POST['mancc'];
    $tenncc = $_POST['tenncc'];
    $sdt = $_POST['sdt'];
    $dchi = $_POST['dchi'];
    $sql_sua = "UPDATE nhacungcap
                SET NCC_TEN = '".$tenncc.
                "', NCC_SDT = '".$sdt.
                "', NCC_DIACHI = '".$dchi.
                "' WHERE NCC_MA ='".$id."'";
    if($connect->query($sql_sua) === TRUE){
        echo '<script>
                alert ("Chinh sua thanh cong");
                window.location ="../ad_index.php?act=quanlynhacungcap";       
             </script>';        

    }
    else{
        echo '<script>
                alert ("Chinh sua khong thanh cong");
                window.location ="../ad_index.php?act=quanlynhanviencungcap";
            </script>';    
    }

    $connect->close();
?>