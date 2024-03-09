<?php
    include('config/config.php');
    $ID = $_GET['spID'];
    $sql = "SELECT * FROM sanpham WHERE SP_MA = '".$_GET['spID']."'";
    // $tensp = '';
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $tensp = $row["SP_TEN"];
        $ttsp = $row["SP_THONGTIN"];
        $gia = $row["SP_GIA"];
        $sl = $row["SP_SOLUONG"];
        $hinhanh = $row["SP_HINHANH"];
    } 
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script language="javascript" src="../js/showImage_xly.js"></script>

<div style="font-size:25px; font-weight: bold; text-align: center;">Sửa Sản Phẩm có Mã: <?php echo $ID; ?></div> 
    <form method = "POST" action = "action/sp_xuly_sua.php" enctype = "multipart/form-data">
        <table border = "1" class = "table table-bordered border-primary" style = "text-align:left; width: 65%; margin-left: 17%; font-size:20px;">
            <tr>
                <th>Mã Sản Phẩm</th>
                <td>
                    <input type = "text" readonly="true" size = "50" name = "masp" value = "<?php echo $ID; ?>">
                </td>
            </tr>
            <tr>
                <th>Mã Loại Sản Phẩm</th>
                <td>
                    <select name="maloaisp" id="">
                        <?php
                        $sql = "SELECT * FROM loai_sp ORDER BY LSP_MA ASC";
                        $query = mysqli_query($connect, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $row['LSP_MA'] ?>">
                            <?php echo $row['LSP_TEN'] ?>
                        </option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr> 
            <tr>
                <th>Tên Sản Phẩm</th>
                <td>
                    <input type = "text" name = "tensp" size = "50" value = "<?php echo $tensp; ?>">
                </td> 
            </tr>
            <tr>
                <th>Thông Tin Sản Phẩm</th>
                <td>
                    <textarea name="thongtinsp" id="ttsp" cols="20" rows="5"  style = "width:98%;"><?php echo $ttsp;?></textarea>
                </td>
            </tr>
            <tr>
                <th>Giá Bán</th>
                <td>
                    <input type="text" name = "giaban" size = "50" placeholder = "Thêm giá sản phẩm" value = "<?php echo $gia.'đ';?>">
                </td>
            </tr>
            <tr>
                <th>Số Lượng</th>
                <td>
                    <input type="number" name = "soluong" value = "<?php echo $sl; ?>">
                </td>
            </tr>
            <tr>
                <th>Hình Ảnh</th>
                <td>
                    <img src = "module/Upload/<?php echo $hinhanh ?>" id = "image" style = "width: 100px; height: 100px;">
                    <br>
                    <input name = "hinh" readonly="true" value="<?php echo $hinhanh; ?>" style ="border:none;">
                    <br>
                    <input type="file" name="image" onchange = "chooseFile(this)" accept=".png, .jpg, .jpeg, image" >
                </td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center;">
                    <button style = "background-color: white; border: 0;">
                        <i class="fa-regular fa-square-check fa-2xl" style="color: #ff0080;"></i>
                    </button>
                </td>
            </tr>
                
        </table>
    </form>
<?php
    $connect->close();
?>