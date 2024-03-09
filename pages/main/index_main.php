<?php
    include('../admin/functions/list_pages.php');
    include('../admin/functions/cut_pages.php');
    
    $sql_pro = "SELECT * FROM sanpham, loai_sp
                WHERE sanpham.LSP_MA = loai_sp.LSP_MA 
                ORDER BY sanpham.SP_MA DESC
                LIMIT $start, 10";
    $query_pro = mysqli_query($connect, $sql_pro);
?>
<h1 style = "text-align: center;">Sản Phẩm Mới</h1>
<ul class = "product_list">
    <?php
        while($row = mysqli_fetch_array($query_pro)){
    ?>
    <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row['SP_MA']; ?>">
            <img src="../admin/module/Upload/<?php echo $row['SP_HINHANH'];?>" alt="">
            <h3 class = "title_product"><?php echo $row['SP_TEN'];?></h3>
            <p class = "price_product"><?php echo number_format($row['SP_GIA'],0,',','.').' VND';?></p>
            <p class = "cate_product"><?php echo $row['LSP_TEN'];?></p>
        </a>
        <form method = "POST" action="action/themgiohang.php?idSP=<?php echo $row['SP_MA'];?>">
            <a href="index.php?quanly=giohang">
                <button class = "cart" name = "themgh" style = "width: 30%;">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </a>
        </form>
    </li>
    <?php
        }
    ?>  
</ul>
<div class = "clear"></div>
<ul class = "list_pages">
    <li>        
        <?php list_page('sanpham', 'index.php?trang=', $connect);?>
    </li>
</ul>