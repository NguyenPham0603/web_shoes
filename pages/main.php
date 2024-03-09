<div id = "main">
    <div class = "main_content">
        <?php

            if(isset($_GET['quanly'])){
                $tmp = $_GET['quanly'];
            }
            else{
                $tmp = '';
            }
            if($tmp == 'danhmucsanpham'){
                include ("main/danhmuc.php");
            }
            else if($tmp == 'giohang'){
                include ("main/giohang.php");
            }
            else if($tmp == 'tintuc'){
                include ("main/tintuc.php");
            }
            else if($tmp == 'lienhe'){
                include ("main/lienhe.php");
            }
            else if($tmp == 'sanpham'){
                include ("main/sanpham.php");
            }
            else if($tmp == 'dangky'){
                include ("main/dangky.php");
            }
            else if($tmp == 'timkiem'){
                include ("main/timkiem.php");
            }
            else if($tmp == 'dathang'){
                include ("main/thanhtoan.php");
            }
            else if($tmp == 'thongtin'){
                include ("action/thongtinkh_xuly_hienthi.php");
            }
            else if($tmp == 'thaydoimk'){
                include ("main/doimatkhau.php");
            }
            else if($tmp == 'lichsu'){
                include ("main/lsudonhang.php");
            }
            else if($tmp == 'donhangchitiet'){
                include ("action/donhang_xuly_hienthi.php");
            }
            else{
                include ("/header.php");
                include ("main/index_main.php");
            }
        ?>
        
    </div>
    <div class = "clear"></div>
</div>