<?php  
    include('../config/config.php');

    $masp = $_POST['masp'];
    $malsp = $_POST['maloaisp'];
    $tensp = $_POST['tensp'];
    $ttsp = $_POST['thongtinsp'];
    $gia = $_POST['giaban'];
    $sl = $_POST['soluong'];

    //xly Hinh Anh
    $hinhanh = $_FILES['themanh']['name'];
    $hinhanh_tmp = $_FILES['themanh']['tmp_name'];


    $sql_themsp = "INSERT INTO sanpham(SP_MA, LSP_MA, SP_TEN, SP_THONGTIN, SP_GIA, SP_SOLUONG, SP_HINHANH) 
                    VALUES('".$masp."','".$malsp."', '".$tensp."', '".$ttsp."', '".$gia."', '".$sl."', '".$hinhanh."')";
    if(mysqli_query($connect, $sql_themsp)){
        move_uploaded_file($hinhanh_tmp,'../module/Upload/'.$hinhanh);
        header('Location: ../ad_index.php?act=quanlysanpham');
    }else{
        echo("Loi: ".mysqli_error($connect));
   }

   
?>