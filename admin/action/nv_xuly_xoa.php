<?php
    include('config/config.php');
    $sql = "DELETE FROM nhanvien WHERE NV_MA='" . $_GET['nvID'] ."'";
    if(mysqli_query($connect, $sql)){
        echo "Xóa thành công ". $_GET['nvID'];
        echo '<script>
                alert ("Xoa thanh cong");
                window.location ="ad_index.php?act=quanlynhanvien";       
            </script>';   

    } else{
        echo "ERROR: Không thể thực thi truy vấn $sql. " . mysqli_error($connect);
    }



    $connect->close();
?>