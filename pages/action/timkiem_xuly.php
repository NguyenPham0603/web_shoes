<?php
    include('../../admin/config/config.php');
    if(isset($_POST['timkiem'])){
        if($tukhoa = ''){
            $tukhoa = "Hãy nhập từ khóa để tìm kiếm!!";
        }
        $tukhoa = $_POST['tukhoa'];
    }
    
    else{
        $tukhoa = "Không tìm thấy sản phẩm tương ứng.";
    }
    $sql_pro = "SELECT * FROM sanpham s JOIN loai_sp l ON s.LSP_MA = l.LSP_MA
                WHERE s.SP_TEN LIKE '%".$tukhoa."%' OR l.LSP_TEN LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($connect, $sql_pro);
    header('Location:  ../index.php?quanly=timkiem');
?>
