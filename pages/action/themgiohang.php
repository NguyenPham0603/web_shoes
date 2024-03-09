<?php
    session_start();
    include('../../admin/config/config.php');

    if(isset($_POST['themgh'])){
        // session_destroy();
        $id = $_GET['idSP'];
        $soluong = 1;
        $sql = "SELECT * 
                FROM sanpham 
                WHERE SP_MA = '".$id."' 
                LIMIT 1";
        $query = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new_product = array(array('tensanpham' => $row['SP_TEN'],
                                        'masanpham' => $id,
                                        'soluong' => $soluong,
                                        'gia' => $row['SP_GIA'],
                                        'hinhanh' => $row['SP_HINHANH'],));

            //kiem tra gio hang ton tai
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    //neu dlieu trung
                    if($cart_item['masanpham'] == $id){
                        $product[] = array('tensanpham' => $cart_item['tensanpham'],
                                        'masanpham' => $cart_item['masanpham'],
                                        'soluong' => $cart_item['soluong'] + 1,
                                        'gia' => $cart_item['gia'],
                                        'hinhanh' => $cart_item['hinhanh'],);
                        $found = true;
                    }else{
                        //neu dlieu ko trung
                        $product[] = array('tensanpham' => $cart_item['tensanpham'],
                                        'masanpham' => $cart_item['masanpham'],
                                        'soluong' => $cart_item['soluong'],
                                        'gia' => $cart_item['gia'],
                                        'hinhanh' => $cart_item['hinhanh'],);
                    }
                }
                if($found == false){
                    //lk dlieu new_product voi product
                    $_SESSION['cart'] = array_merge($product, $new_product);
                }
                else{
                    $_SESSION['cart'] = $product;
                }
            }
            else{  
                $_SESSION['cart'] = $new_product;
            } 
        }
        if(!isset($_SESSION['dangnhap'])){
            header('Location: ../main/dangnhap.php');
        }
        else{
            header('Location: ../index.php');
        }
       
    }
    if(isset($_POST['mua_ngay'])){
        header('Location: ../index.php?quanly=thanhtoan');
    }
?>