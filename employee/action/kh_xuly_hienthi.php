<?php
include('../admin/functions/list_pages.php');
include('../admin/functions/cut_pages.php');

$sql = "SELECT * FROM khachhang ORDER BY KH_MA ASC LIMIT $start, 10";
        
// câu truy vấn và gán vào $result
$result = mysqli_query($connect, $sql);
echo "<h2 style = 'text-align:center; font-weight: bold;'>Danh Sách Khách Hàng</h2>";
// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
if (mysqli_num_rows($result) > 0) {
    // Sử dụng vòng lặp while để lặp kết quả  
    echo "<table border='1'class = 'table table-striped table-bordered' style = 'vertical-align: middle; width: 100%; font-size:15px;'>
            <tr style='text-align:center;'>
                <th>Mã Khách Hàng</th>
                <th>Họ Tên</th>
                <th>Số Điện Thoại</th>
                <th>Địa Chỉ</th>
                <th>Tài Khoản</th>                 
            </tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
       
        echo"<tr> <td>" . $row["KH_MA"] . "</td>";
        echo" <td>" . $row["KH_HOTEN"] . "</td>";
        echo" <td>" . $row["KH_SDT"] . "</td>";
        echo" <td>" . $row["KH_DCHI"] . "</td>";
        echo" <td>" . $row["KH_USER"] . "</td> </tr>";   
    }
    echo "</table>";
} 
else {
    echo "Không có du lieu";
}
?>
<ul class = "list_pages">
    <li>
       <?php list_page('khachhang', 'index_emp.php?act=khachhang&trang=', $connect); ?>
    </li>
</ul>
