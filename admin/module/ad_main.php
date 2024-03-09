<div class = "clear"></div>
<div class = "main_ad">
    <?php
        if(isset($_GET['act'])){
            $tmp = $_GET['act'];
        }
        else{
            $tmp = '';
        }
        
        if($tmp == 'quanlyloaisanpham'){
            include ("pages/lsp_them.php");
        }
        else if($tmp == 'sualoaisp'){
            include ("pages/lsp_sua.php");
        }
        else if($tmp == 'xoaloaisp'){
            include ("action/lsp_xuly_xoa.php");
        }
        else if($tmp == 'quanlysanpham'){
            include ("pages/sp_them.php");
        }
        else if($tmp == 'suasp'){
            include ("pages/sp_sua.php");
        }
        else if($tmp == 'xoasp'){
            include ("action/sp_xuly_xoa.php");
        }
        else if($tmp == 'quanlynhanvien'){
            include ("pages/nv_them.php");
        }
        else if($tmp == 'suanv'){
            include ("pages/nv_sua.php");
        }
        else if($tmp == 'xoanv'){
            include ("action/nv_xuly_xoa.php");
        }
        else if($tmp == 'quanlykhachhang'){
            include ("action/kh_xuly_hienthidata.php");
        }
        else if($tmp == 'quanlykhachhangchitiet'){
            include ("action/kh_xuly_hienthichitiet.php");
        }
        else if($tmp == 'quanlydonhangchitiet'){
            include ("action/donhang_xuly_hienthidata.php");
        }

        else if($tmp == 'quanlydonhang'){
            include ("pages/donhang.php");
        }
        else{
            include ("ad_index.php?act=quanlydonhang");
        }
    ?>
</div>