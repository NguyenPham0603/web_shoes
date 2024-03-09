<?php
    include("../admin/config/config.php");
    if(isset($_SESSION['username_emp'])){
        $sql = "SELECT * FROM nhanvien WHERE NV_USER='".$_SESSION['username_emp']."'";
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $date = date_create($row['NV_NGSINH']);

        
        
?>
    <h2 style = "text-align: center;">THÔNG TIN NHÂN VIÊN: <?php echo $row['NV_HOTEN']; ?></h2>
    <table class = 'table table-striped table-bordered' style = "width: 60%; margin-left: 20%;">
        <tr>
            <th>Mã Nhân Viên</th>
            <td><?php echo $row['NV_MA']; ?></td>
        </tr>
        <tr>
            <th>Họ & Tên</th>
            <td><?php echo $row['NV_HOTEN']; ?></td>
        </tr>
        <tr>
            <th>Ngày Sinh</th>
            <td><?php echo date_format($date, 'd-m-Y'); ?></td>
        </tr>
        <tr>
            <th>Căn Cước Công Dân</th>
            <td><?php echo $row['NV_CCCD']; ?></td>
        <tr>
            <th>Số Điện Thoại</th>
            <td><?php echo $row['NV_SDT']; ?></td>
        </tr>
        <tr>
            <th>Địa Chỉ</th>
            <td><?php echo $row['NV_DCHI']; ?></td>
        </tr>
        <tr>
            <th>Lương</th>
            <td><?php echo number_format($row["NV_LUONG"],0,',','.').'VND/ Tháng'  ?></td>
        </tr>
        <tr>
            <th>Tên Đăng Nhập</th>
            <td><?php echo $row['NV_USER']; ?></td>
        </tr>
    </table>

<?php
        }
    }
    
?>