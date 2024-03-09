<?php
    include('config/config.php');
    $ID = $_GET['nvID'];
    $sql = "SELECT * FROM nhanvien WHERE NV_MA = '".$_GET['nvID']."'";
    $tensp = '';
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $tennv = $row['NV_HOTEN'];
        $nsinh = $row['NV_NGSINH'];
        $cccd = $row['NV_CCCD'];
        $sdt = $row['NV_SDT'];
        $dchi = $row['NV_DCHI'];
        $luong = $row['NV_LUONG'];
        $user = $row['NV_USER'];
        $pass = $row['NV_PW'];
    } 
?>
<div style="font-size:25px; font-weight: bold; text-align: center;">Sửa Nhân Viên có Mã: <?php echo $ID; ?></div> 
    <form method = "POST" action = "action/nv_xuly_sua.php" enctype = "multipart/form-data">
        <table border = "1" class = "table table-bordered border-primary" style = "text-align:left; width: 65%; margin-left: 17%; font-size:20px;">
            <tr>
                <td>Mã Nhân Viên:</td>
                <td>
                    <input readonly = "true" type="text" name = "manv" value = "<?php echo $ID; ?>">
                </td>
            </tr>
            <tr>
                <td>Họ và Tên:</td>
                <td>
                    <input type="text" name = "tennv" value = "<?php echo $tennv; ?>">
                </td>
            </tr>
            <tr>
                <td>Ngày Sinh:</td>
                <td><input type="date" name = "nsinh" value = "<?php echo $nsinh; ?>"></td>
            </tr>
            <tr>
                <td>Căn Cước Công Dân:</td>
                <td>
                    <input type="text" name = "cccd" value = "<?php echo $cccd; ?>">
                </td> 
            </tr>
            <tr>
                <td>Số Điện Thoại:</td>
                <td>
                    <input type="text" name = "sdt" value = "<?php echo $sdt; ?>">
                </td>
            </tr>
            <tr>
                <td>Địa Chỉ:</td>
                <td><input type="text" name = "dchi" value = "<?php echo $dchi; ?>"></td>
            </tr>
            <tr>
                <td>Lương:</td>
                <td>
                    <input type="text" name = "luong" value = "<?php echo $luong; ?>">
                </td>
                
            </tr>
            <tr>
                <td>Tài Khoản Nhân Viên:</td>
                <td><input type="text" name = "user" value = "<?php echo $user; ?>"></td>
            </tr>
            <tr>
                <td>Mật Khẩu:</td>
                <td><input type="text" name = "pass" value = "<?php echo $pass; ?>"></td>
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