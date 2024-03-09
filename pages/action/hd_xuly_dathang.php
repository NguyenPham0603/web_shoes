<?php
    session_start();
    include('../../admin/config/config.php');
    
    $id_kh = $_SESSION['id_kh'];
    
    //  Lấy thời gian hiện tại của hệ thống
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngaylap = date("Y-m-d H:i:s");
    $trangthai = '1';
    $sql = "INSERT INTO hoadon(KH_MA, HD_NGAYLAP, HD_TRANGTHAI) 
            VALUES ('".$id_kh."','".$ngaylap."', '".$trangthai."')";
    $result = mysqli_query($connect, $sql);
    $last_id = $connect->insert_id;
    if($result){
        //thêm giỏ hàng chi tiết
        $tongtien=0;
        foreach($_SESSION['cart'] as $key=>$value){
            $masp = $value['masanpham'];
            $soluong = $value['soluong'];
            $gia = $value['gia'];
            $tongtien = ($soluong * $gia);
            $themdonhang = "INSERT INTO chitiethoadon(SP_MA, HD_MA, SOLUONG, DONGIA, TONGTIEN, TRANGTHAI)
                            VALUES('".$masp."', '".$last_id."','".$soluong."', '".$gia."', '".$tongtien."', '".$trangthai."')";
            mysqli_query($connect, $themdonhang);

            $resule_update = mysqli_query($connect, "SELECT SP_SOLUONG FROM sanpham 
                                                    WHERE SP_MA = '".$value['masanpham']."' 
                                                    LIMIT 1");
            $row = mysqli_fetch_array($resule_update);
            $sl = $row['SP_SOLUONG'] - $soluong;
            $update_pro = "UPDATE sanpham SET SP_SOLUONG = '".$sl."' WHERE SP_MA = '".$value['masanpham']."'";
            $connect->query($update_pro);
        }

        
    }
    echo "<script>
            alert('Cảm Ơn Bạn Đã Tin Tưởng Mua Hàng ^&^');
            window.location = '../index.php';
        </script>";
    unset($_SESSION['cart']);
?>