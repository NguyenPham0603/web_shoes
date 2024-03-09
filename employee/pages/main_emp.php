<div class = "clear"></div>
<div id = "main">
    <?php
        if(isset($_GET['act'])){
            $tmp = $_GET['act'];
        }
        else{
            $tmp = '';
        }
        if($tmp == 'loaisanpham'){
            include ("action/lsp_xuly_hienthi.php");
        }
        else if($tmp == 'sanpham'){
            include ("action/sp_xuly_hienthi.php");
        }
        else if($tmp == 'khachhang'){
            include ("action/kh_xuly_hienthi.php");
        }
        else if($tmp == 'donhang'){
            include ("module/donhang_emp.php");
        }
        else if($tmp == 'donhangchitietemp'){
            include ("action/dh_xuly_hienthi.php");
        }
        else if($tmp == 'thongtin'){
            include ("action/thongtin_xuly_hienthi.php");
        }
            // else if($tmp == 'thanhtoan'){
            //     include ("main/thanhtoan.php");
            // }
        else{
            include ("index_emp.php?act=donhang");
        }
?>
</div>