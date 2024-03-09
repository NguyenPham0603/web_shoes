<?php
    session_start();
    if(isset($_GET['xoagiohang'] ) && $_GET['xoagiohang']==1){
        unset($_SESSION['cart']); //chỉ định xóa 1 session nào đó
        header('Location: ../index.php?quanly=giohang');
    }
    //xoa tung sp
    if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
          $id = $_GET['xoa'];
          foreach($_SESSION['cart'] as $cart_item){
             if($cart_item['masanpham'] != $id){
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
  ?>
 