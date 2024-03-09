<?php
    include('config/config.php');
    $ID = $_GET['nccID'];
    $sql = "SELECT * FROM nhacungcap WHERE NCC_MA = '".$_GET['nccID']."'";

    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $tenncc = $row['NCC_TEN'];
        $sdt = $row['NCC_SDT'];
        $dchi = $row['NCC_DIACHI'];
    } 
?>
<div style="font-size:25px; font-weight: bold; text-align: center;">Sửa Nhà Cung Cấp có Mã: <?php echo $ID; ?></div> 
    <form method = "POST" action = "action/ncc_xuly_sua.php" enctype = "multipart/form-data">
        <table border = "1" class = "table table-bordered border-primary" style = "text-align:left; width: 65%; margin-left: 17%; font-size:20px;">
            <tr>
                <th>Mã Nhà Cung Cấp:</th>
                <td>
                    <input readonly = "true" type="text" name = "mancc" size = "50" value = "<?php echo $ID; ?>">
                </td>
            </tr>
            <tr>
                <th>Tên Nhà Cung Cấp:</th>
                <td><input type="text" name = "tenncc" size = "50" value = "<?php echo $tenncc; ?>"></td>
            </tr>
            <tr>
                <th>Số Điện Thoại:</th>
                <td>
                    <input type="text" name = "sdt" size = "50" value = "<?php echo $sdt; ?>">
                </td>
            </tr>
            <tr>
                <th>Địa Chỉ:</th>
                <td><input type="text" name = "dchi" size = "50" value = "<?php echo $dchi; ?>"></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:right;">
                    <button style = "background-color: white; border: 0;">
                        <i class="fa-regular fa-circle-check fa-xl" style="color: #ff0080;"></i> 
                    </button>
                </td>
            </tr>
                
        </table>
    </form>
<?php
    $connect->close();
?>