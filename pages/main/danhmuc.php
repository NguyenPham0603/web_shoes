<?php
    $sql_pro = "SELECT * FROM sanpham 
                WHERE sanpham.LSP_MA = '$_GET[id]' 
                ORDER BY SP_MA DESC";
    $query_pro = mysqli_query($connect, $sql_pro);
    $sql = "SELECT * FROM loai_sp 
                WHERE loai_sp.LSP_MA = '$_GET[id]' 
                LIMIT 1";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);  
?>
<h1 style = "text-align: center; margin-top: 25px;">Danh mục sản phẩm: <?php echo $row['LSP_TEN']; ?></h1>
<ul class = "product_list">
    <?php
        while($row_pro = mysqli_fetch_array($query_pro)){
    ?>
    <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['SP_MA']; ?>">
            <img src="../admin/module/Upload/<?php echo $row_pro['SP_HINHANH'];?>" alt="">
            <p class = "title_product"><?php echo $row_pro['SP_TEN'];?></p>
            <p class = "price_product"><?php echo number_format($row_pro['SP_GIA'],0,',','.').' VND';?></p>
        </a>
        <br>
        <br>
        <br>
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