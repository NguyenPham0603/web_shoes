<?php
    session_start();
    include('../../admin/config/config.php');
    //Tăng số lượng
    $id = $_GET['cong'];
    $sql = "SELECT * 
                FROM sanpham 
                WHERE SP_MA = '".$id."' 
                LIMIT 1";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);
    if(isset($_GET['cong'])){
        $id = $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['masanpham'] != $id){
                $product[] = array('tensanpham' => $cart_item['tensanpham'],
                                        'masanpham' => $cart_item['masanpham'],
                                        'soluong' => $cart_item['soluong'] ,
                                        'gia' => $cart_item['gia'],
                                        'hinhanh' => $cart_item['hinhanh'],);
                $_SESSION['cart'] = $product;
            }
            else{
                if($cart_item['soluong'] < $row['SP_SOLUONG']){
                    $tangsl = $cart_item['soluong'] + 1;
                    $product[] = array('tensanpham' => $cart_item['tensanpham'],
                                        'masanpham' => $cart_item['masanpham'],
                                        'soluong' => $tangsl,
                                        'gia' => $cart_item['gia'],
                                        'hinhanh' => $cart_item['hinhanh'],);
                }
                else{
                    $product[] = array('tensanpham' => $cart_item['tensanpham'],
                                        'masanpham' => $cart_item['masanpham'],
                                        'soluong' => $cart_item['soluong'] ,
                                        'gia' => $cart_item['gia'],
                                        'hinhanh' => $cart_item['hinhanh'],);
                }
                $_SESSION['cart'] = $product;
                header('Location: ../index.php?quanly=giohang');
            }
        }
    }

    //Giảm số lượng
    if(isset($_GET['tru'])){
        $id = $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['masanpham'] != $id){
                $product[] = array('tensanpham' => $cart_item['tensanpham'],
                                        'masanpham' => $cart_item['masanpham'],
                                        'soluong' => $cart_item['soluong'] ,
                                        'gia' => $cart_item['gia'],
                                        'hinhanh' => $cart_item['hinhanh'],);
                $_SESSION['cart'] = $product;
            }
            else{
                if($cart_item['soluong'] > 1){
                    $tangsl = $cart_item['soluong'] - 1;
                    $product[] = array('tensanpham' => $cart_item['tensanpham'],
                                        'masanpham' => $cart_item['masanpham'],
                                        'soluong' => $tangsl,
                                        'gia' => $cart_item['gia'],
                                        'hinhanh' => $cart_item['hinhanh'],);
                }
                else{
                    $product[] = array('tensanpham' => $cart_item['tensanpham'],
                                        'masanpham' => $cart_item['masanpham'],
                                        'soluong' => $cart_item['soluong'] ,
                                        'gia' => $cart_item['gia'],
                                        'hinhanh' => $cart_item['hinhanh'],);
                }
                $_SESSION['cart'] = $product;
                header('Location: ../index.php?quanly=giohang');
            }
        }
    }
?>