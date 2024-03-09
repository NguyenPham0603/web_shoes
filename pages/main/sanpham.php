<h2 style = "text-align: center; margin-top: 15px; font-weight:bold;">Chi tiết sản phẩm</h2>
<?php 
    $sql = "SELECT * FROM sanpham, loai_sp
            WHERE sanpham.LSP_MA = loai_sp.LSP_MA
            AND sanpham.SP_MA = '$_GET[id]'
            LIMIT 1";
    $query = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($query)){

?>

<div class = "wrapper_detail">
    <div class = "img_product">
        <img width = "100%" src="../admin/module/Upload/<?php echo $row['SP_HINHANH'];?>" alt="">
    </div>
    <form method = "POST" action="action/themgiohang.php?idSP=<?php echo $row['SP_MA'];?>">
        <div class = "detail_product">
            <table style = "font-size: 20px;">
                <tr>
                    <th style = "width: 20%;">Tên Sản Phẩm:</th>
                    <td><?php echo $row['SP_TEN'];?></td>
                </tr>
                <tr>
                    <th>Loại Sản Phẩm: </th>
                    <td><?php echo $row['LSP_TEN'];?></td>
                </tr>
                <tr>
                    <th>Mã Sản Phẩm: </th>
                    <td><?php echo $row['SP_MA'];?></td>
                </tr>
                <tr>
                    <th>Giá: </th>
                    <td><?php echo number_format($row['SP_GIA'],0,',','.').' VND';?></td>
                </tr>    
                <tr>
                    <th>Số Lượng: </th>
                    <td><?php echo $row['SP_SOLUONG'];?></td>
                </tr>
                <tr>
                    <th>Thông Tin Sản Phẩm: </th>
                    <td style= "padding-right: 115px;"><?php echo $row['SP_THONGTIN'];?></td>
                </tr>
                <tr>
                    <td style = "text-align: center;" colspan = "2">
                        <a href="index.php?quanly=giohang">
                            <button class = "cart" name = "themgh">
                                Thêm Giỏ Hàng
                            </button>
                        </a>
                    </td>
                </tr>    
            </table>
        </div>
    </form>
    
</div>

<?php
    }
?>
<div class = "clear"></div>
<div >
    <?php
        include('index_main.php');
    ?>
</div>

<!-- substr($row['SP_THONGTIN'], 0, 100); -->