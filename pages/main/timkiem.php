<?php
    if(isset($_POST['timkiem'])){
        if(!isset($_POST['tukhoa'])){
            $tukhoa = "Hãy nhập từ khóa để tìm kiếm!!";
        }
        $tukhoa = $_POST['tukhoa'];
    }
    else{
        $tukhoa = 'Không tìm thấy sản phẩm tương ứng';
    }
    $sql_pro = "SELECT * FROM sanpham JOIN loai_sp ON  loai_sp.LSP_MA = sanpham.LSP_MA
                WHERE SP_TEN LIKE '%".$tukhoa."%' OR LSP_TEN LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($connect, $sql_pro);
?>

<h1 style = "text-align: center;">Từ khóa tìm kiếm: <?php echo $tukhoa;?></h1>
<ul class = "product_list">
    <?php
        while($row_pro = mysqli_fetch_array($query_pro)){
    ?>
    <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['SP_MA']; ?>">
            <img src="../admin/module/Upload/<?php echo $row_pro['SP_HINHANH'];?>" alt="">
            <p class = "title_product"><?php echo $row_pro['SP_TEN'];?></p>
            <p class = "price_product"><?php echo number_format($row_pro['SP_GIA'],0,',','.').' VND';?></p>
            <p class = "cate_product"><?php echo $row_pro['LSP_TEN'];?></p>
        </a>
        <form method = "POST" action="action/themgiohang.php?idSP=<?php echo $row['SP_MA'];?>">
            <a href="index.php?quanly=giohang">
                <button class = "cart" name = "themgh" style = "width: 30%;">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </a>
        </form>
    </li>
    <?php
        }
    ?>
</ul>