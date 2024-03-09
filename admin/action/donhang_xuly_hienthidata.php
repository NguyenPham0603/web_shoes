<script language="javascript" src = "../js/Show_Mess.js"></script>

<?php
include('config/config.php');
$id = $_GET['code'];
// Câu SQL lấy danh sách
$sql = "SELECT * FROM chitiethoadon c, sanpham s
        WHERE c.SP_MA = s.SP_MA AND c.HD_MA = '".$id."'
        ORDER BY c.HD_MA DESC";

// Thực thi câu truy vấn và gán vào $result
$result = mysqli_query($connect, $sql);
 
// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
if (mysqli_num_rows($result) > 0) {
    // Sử dụng vòng lặp while để lặp kết quả  
    echo "<table border='1' class = 'table table-striped table-bordered' style = 'vertical-align: middle;'>
            <form method = 'GET' action = 'action/donhang_xuly_duyet.php' >
                <tr style='text-align:center;'>
                    <th>STT</th>
                    <th>Mã Đơn Hàng</th>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                    <th>Thành Tiền</th>                  
                </tr>";
    $i = 0;
    $tongtien = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $trangthai = $row['TRANGTHAI'];
        $i++;
        $thanhtien = $row['DONGIA']*$row['SOLUONG'];
        $tongtien += $thanhtien;
?>  
        <tr> 
            <td><?php echo $i; ?></td>
            <td> <input readonly='true' name = 'mahoadon' value = '<?php echo $row["HD_MA"]; ?>' style = "border:none;"></td>
            <td><?php echo $row["SP_MA"]; ?></td>
            <td><?php echo $row["SP_TEN"]; ?></td>
            <td><?php echo $row['SOLUONG']; ?></td>
            <td><?php echo number_format($row['DONGIA'], 0, ',', '.').'VND'; ?></td>
            <td><?php echo number_format($thanhtien, 0, ',', '.').'VND' ?></td>  
    </tr>
    
<?php    
    }
?>
    <tr>
        <td colspan = "2">Chọn Nhân Viên: 
            <select name="manhanvien" id="">
                <?php
                    $sql_emp = "SELECT * FROM nhanvien ORDER BY NV_MA ASC";
                    $query = mysqli_query($connect, $sql_emp);
                    while ($row_emp = mysqli_fetch_array($query)) {
                ?>
                <option value="<?php echo $row_emp['NV_MA'] ?>">
                    <?php echo $row_emp['NV_HOTEN']; ?>
                </option>
                <?php
                    }
                ?>
            </select>
        </td>
<?php
        if($trangthai == 1){
            echo "<td style = 'text-align: center; color: red; font-weight: bold;'> Chưa Thanh Toán </td>";
        }
        else{
            echo "<td style = 'text-align: center; color:green;'> Đã Thanh Toán </td>";
        }
?>
        <td colspan = "2"  style = "font-weight: bold; text-align: center;">
            Tổng Tiền: 
            <?php echo ' '.number_format($tongtien, 0, ',', '.').'VND'; ?>
        </td>
        <td colspan = "2" style = 'text-align: center;'>
        <?php
            $sql_hd = "SELECT HD_TRANGTHAI FROM hoadon WHERE HD_MA = '".$id."' LIMIT 1";
            $result_hd = mysqli_query($connect, $sql_hd);
            $row_hd = mysqli_fetch_array($result_hd);

            if($row_hd['HD_TRANGTHAI'] == 1){
                echo "<button>Duyệt</button>";
            }
            else if($row_hd['HD_TRANGTHAI'] == 5){
                echo "<br><p style = 'color: red; vertical-align:middle;'>Đơn Hàng Đã Hủy</p>";
            }
            else{
                echo "<br><p style = 'color: blue; vertical-align:middle;'>Đã Duyệt Đơn Hàng</p>";
            }   
        ?>
        </td>
    </tr>
</form>
    
    <button style = "float: left; margin-bottom: 10px; color: black;">
        <a href="ad_index.php?act=quanlydonhang" style = "text-decoration: none;">
            Quay Về
        </a>
    </button>
        
<?php    
    echo "</table>";
} 
else {
    echo "Không có dữ liệu";
} 
    if($row_hd['HD_TRANGTHAI'] == 5){
?>      
        <div class = "clear"></div>
        <button style = "float: right; color: brown; margin-bottom: 20px;">
            <a onclick = "show_message('<?php echo $id; ?>','action/donhangdahuy_xuly_xoa.php?code=' ,'Bạn Có Muốn Xóa Đơn Hàng Này?')">
                Xóa
            </a>
        </button>

<?php  
}
?>  
