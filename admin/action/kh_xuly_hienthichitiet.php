<?php
    if(isset($_GET['idkh'])){
        $id = $_GET['idkh'];
        $sql = "SELECT * FROM khachhang WHERE KH_MA = '".$id."'";
            
        // câu truy vấn và gán vào $result
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        $date = date_create($row['KH_NGSINH']);
        
  
?>
    <h2 style = "text-align: center;">THÔNG TIN KHÁCH HÀNG: <?php echo $row['KH_HOTEN']; ?></h2>
    <table class = 'table table-striped table-bordered' style = "width: 60%; margin-left: 20%;">
        <tr>
            <th>Mã Khách Hàng</th>
            <td><?php echo $row['KH_MA']; ?></td>
        </tr>
        <tr>
            <th>Họ & Tên</th>
            <td><?php echo $row['KH_HOTEN']; ?></td>
        </tr>
        <tr>
            <th>Ngày Sinh</th>
            <td><?php echo date_format($date, 'd-m-Y'); ?></td>
        </tr>
        <tr>
            <th>Số Điện Thoại</th>
            <td><?php echo $row['KH_SDT']; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $row['KH_EMAIL']; ?></td>
        </tr>
        <tr>
            <th>Địa Chỉ</th>
            <td><?php echo $row['KH_DCHI']; ?></td>
        </tr>
        <tr>
            <th>Tên Đăng Nhập</th>
            <td><?php echo $row['KH_USER']; ?></td>
        </tr>
        <tr>
            <th>Mật Khẩu</th>
            <td><?php echo $row['KH_PW'] ?></td>
        </tr>
        <tr>
            <td colspan = "2" style = "text-align:center;">
                <button>
                    <a href="ad_index.php?act=quanlykhachhang" style = 'text-decoration: none; color: black;'>
                        Quay Về
                    </a>
                </button>
            </td>
        </tr>
    </table>
<?php
    }
?>