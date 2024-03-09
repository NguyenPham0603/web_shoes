<script language="javascript" src = "../js/Show_Mess.js"></script>
<table width = '100%' style = "vertical-align: middle; font-size:20px;" class = "table table-striped table-bordered">
    <?php
        if(isset($_SESSION['dangnhap'])){
            echo "<h2 style = 'text-align:center;'>--GIỎ HÀNG--</h2>";
        }
        if(isset($_SESSION['cart'])){
    ?>
    <tr style = "text-align:center;">
        <th>STT</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá sản phẩm</th>
        <th>Thành tiền</th>
        <th>Tùy chọn</th>
    </tr>

    <?php
            $i = 0;
            $tongtien = 0;   
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien = $cart_item['soluong'] * $cart_item['gia']; 
                $tongtien += $thanhtien;
                $i++;
    ?>

    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $cart_item['masanpham']; ?></td>
        <td><?php echo $cart_item['tensanpham']; ?></td>
        <td><img src="../admin/module/Upload/<?php echo $cart_item['hinhanh']; ?>" width = "150px"></td>
        <td style = "text-align: center;">
            <a href="action/tang_giamsl.php?tru=<?php echo $cart_item['masanpham']?>">
                <i class="far fa-minus-square"></i>
            </a>

            <?php echo $cart_item['soluong']; ?>

            <a href="action/tang_giamsl.php?cong=<?php echo $cart_item['masanpham']?>">
                <i class="far fa-plus-square"></i>
            </a>
        </td>
        
        <td><?php echo number_format($cart_item['gia'], 0, ',', '.').'VND'; ?></td>
        <td><?php echo number_format($thanhtien, 0, ',', '.').'VND';?></td>   
        <td style = " text-align: center;">
       
                <a class="btn btn-outline-light" style = "--bs-btn-border-color: none; --bs-btn-hover-bg: none" onclick="show_message('<?php echo $cart_item['masanpham'];?>','action/xoagiohang.php?xoa=' ,'Bạn Có Muốn Xóa Sản Phẩm Này Khỏi Giỏ Hàng?')">
                    <i class="far fa-trash-alt fa-2xl"></i>
                </a>
        </td>
    </tr>
    <?php        
        }
    ?>
    <tr>
    
        <td colspan = '8' style = "text-align: center;">
            <p>Tổng Tiền : <?php echo number_format($tongtien, 0, ',', '.').'VND';?>
            </p>
            <button style = "float: left; border-radius: 7px;">
                <a onclick="show_message('1','action/xoagiohang.php?xoagiohang=' ,'Bạn Có Muốn Xóa Tất Cả Khỏi Giỏ Hàng?')">Xóa tất cả</a>
            </button>

            <button name = 'dathang' style = "float: right; border-radius: 7px;">
                <a href="main/thanhtoan.php" style = "text-decoration: none; color: black;">Đặt Hàng</a>
            </button>
        </td>
    </tr>

    <?php

        }else{
    ?>

    <tr>
        <td colspan = '8' style = "text-align:center;">
            <h2>Giỏ Hàng Trống!! Hãy Thêm Sản Phẩm Vào Đi Nào ^$^</h2>
        </td>
    </tr>

    <?php
        }       
    ?>
</table>

<div class = "clear"></div>
<div >
    <?php
        include('index_main.php');
    ?>
</div>
