<?php
    include('../config/config.php');
    $id = $_POST['malsp'];
    $tenlsp = $_POST['tenlsp'];
    $sql_sua = "UPDATE loai_sp SET LSP_TEN = '".$tenlsp."' WHERE LSP_MA='" . $id ."'";
    if($connect->query($sql_sua) === TRUE){
        echo '<script>
                alert ("Chinh sua thanh cong");
                window.location ="../ad_index.php?act=quanlyloaisanpham";       
             </script>';        

    } else{
        
        echo '<script>
                alert ("Chinh sua khong thanh cong");
                window.location ="../ad_index.php?act=quanlyloaisanpham";       
             </script>';    
    }

    $connect->close();
?>