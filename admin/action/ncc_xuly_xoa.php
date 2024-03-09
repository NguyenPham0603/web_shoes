<?php
    include('config/config.php');
    $sql = "DELETE FROM nhacungcap WHERE NCC_MA='" . $_GET['nccID'] ."'";
    if(mysqli_query($connect, $sql)){
        echo "Xóa thành công ". $_GET['nccID'];
        echo '<script>
                alert ("Xoa thanh cong");
                window.location ="ad_index.php?act=quanlynhacungcap";       
            </script>';   
        // echo "<br><a href='ad_index.php?act=quanlyloaisanpham'>Quay ve trang sua</a>";
        // header('Location: ad_index.php?act=quanlynhanvien');

    } else{
        echo "ERROR: Không thể thực thi truy vấn $sql. " . mysqli_error($connect);
    }



    $connect->close();
?>