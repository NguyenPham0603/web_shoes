<?php
    include('../config/config.php');
    include('../functions/update.php');
    $id = $_POST['masp'];
    $malsp = $_POST['maloaisp'];
    $tensp = $_POST['tensp'];
    $ttsp = $_POST['thongtinsp'];
    $gia = $_POST['giaban'];
    $sl = $_POST['soluong'];
    $img_cu=$_POST['hinh'];

    //xly Hinh Anh
    $sql_sua ='';
    $uploadOk=0;//0: ko upload dc....1: upload dc
    if(isset($_FILES['image']['name'])){
        $hinhanh = $_FILES['image']['name'];
        $hinhanh_tmp = $_FILES['image']['tmp_name'];
        if($hinhanh == ""){
            $sql_sua = "UPDATE sanpham 
                        SET LSP_MA = '".$malsp.
                        "', SP_TEN = '".$tensp.
                        "', SP_THONGTIN = '".$ttsp.
                        "', SP_GIA = '".$gia.
                        "', SP_SOLUONG = '".$sl.
                        "' WHERE SP_MA='".$id."'";
                        $uploadOk = 2;
                     
                        
        }else{
            $sql_sua = "UPDATE sanpham 
                        SET LSP_MA = '".$malsp.
                        "', SP_TEN = '".$tensp.
                        "', SP_THONGTIN = '".$ttsp.
                        "', SP_GIA = '".$gia.
                        "', SP_SOLUONG = '".$sl.
                        "', SP_HINHANH = '".$hinhanh.
                        "' WHERE SP_MA='".$id."'";
            if (file_exists('../module/Upload/'.$hinhanh)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            } else{
                $uploadOk = 1;
            }    
                        
        } 
               
            
    }

    if($uploadOk == 2){
        $link1="../ad_index.php?act=quanlysanpham";
        $link2="../ad_index.php?act=suasp&spID=".$id;
        update_execute($connect, $sql_sua, $link1, $link2, "Chỉnh Sửa Thành Công", "Chỉnh Sửa Không Thành Công");        
    }

    if($uploadOk == 1){
        move_uploaded_file($hinhanh_tmp,'../module/Upload/'.$hinhanh);
        unlink('../module/Upload/'.$img_cu);

        $link1="../ad_index.php?act=quanlysanpham";
        $link2="../ad_index.php?act=suasp&spID=".$id;
        update_execute($connect, $sql_sua, $link1, $link2, "Chỉnh Sửa Thành Công", "Chỉnh Sửa Không Thành Công");
       
    } else if($uploadOk == 0){
        $link1="../ad_index.php?act=quanlysanpham";
        $link2="../ad_index.php?act=suasp&spID=".$id;
        update_execute($connect, "", $link1, $link2, "", "Tên Sản Phẩm Đã Tồn Tại");
    }
    $connect->close();
?>