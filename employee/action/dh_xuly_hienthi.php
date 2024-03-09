<script language="javascript" src = "../js/Show_Mess.js"></script>

<?php
    include('../admin/config/config.php');
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
                <form method = 'GET' action = 'action/dh_xuly_xacnhan.php' >
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
            <td> <input readonly='true' name = 'mahoadon' value = '<?php echo $row["HD_MA"]; ?>' style = "border:none; background: none;"></td>
            <td><?php echo $row["SP_MA"]; ?></td>
            <td><?php echo $row["SP_TEN"]; ?></td>
            <td><?php echo $row['SOLUONG']; ?></td>
            <td><?php echo number_format($row['DONGIA'], 0, ',', '.').'VND'; ?></td>
            <td><?php echo number_format($thanhtien, 0, ',', '.').'VND' ?></td>  
        </tr>
    
        
<?php 
} 
        echo "<tr>";
        if($trangthai == 1){
            echo "<td colspan = '3' style = 'text-align: center; color: red; font-weight: bold;'> Chưa Thanh Toán </td>";
        }
        else{
            echo "<td colspan = '3' style = 'text-align: center; color:green;'> Đã Thanh Toán </td>";
        }
?>
            <td colspan = "3"  style = "font-weight: bold; text-align: center;">
                Tổng Tiền: 
                <?php echo ' '.number_format($tongtien, 0, ',', '.').'VND'; ?>
            </td>
        <?php 
            $sql_hd = "SELECT HD_TRANGTHAI FROM hoadon WHERE HD_MA = '".$id."' LIMIT 1";
            $result_hd = mysqli_query($connect, $sql_hd);
            $row_hd = mysqli_fetch_array($result_hd);
            if($row_hd['HD_TRANGTHAI'] == 2){
         ?>
            <td style = 'text-align: center;'>
                <button>Xác Nhận</button>
            </td>
         <?php           
            }
            else {
        ?>
            <td style = 'text-align: center; color: blue;'>
                Đã Xác Nhận
            </td>
        <?php
            }
        ?>
            
        </tr>
    </form>
    
    <button style = "float: left; margin-bottom: 10px; color: black;">
        <a href="index_emp.php?act=donhang">
            Quay Về
        </a>
    </button>
</table>       
<?php      
}
    else {
        echo "Không có dữ liệu";
    }
?>  
