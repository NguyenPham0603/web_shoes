<?php
include('config/config.php');
$sql = "DELETE FROM loai_sp WHERE LSP_MA='" . $_GET['lspID'] ."'";
if(mysqli_query($connect, $sql)){
    echo "Xóa thành công ". $_GET['lspID'];
    echo '<script>
            alert ("Xoa thanh cong");
            window.location ="../ad_index.php?act=quanlyloaisanpham";       
        </script>';   
    // echo "<br><a href='ad_index.php?act=quanlyloaisanpham'>Quay ve trang sua</a>";
    header('Location: ad_index.php?act=quanlyloaisanpham');

} else{
    echo "ERROR: Không thể thực thi truy vấn $sql. " . mysqli_error($connect);
}



$connect->close();
?>
