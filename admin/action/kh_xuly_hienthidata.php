<?php
include('functions/list_pages.php');
include('functions/cut_pages.php');

$sql = "SELECT * FROM khachhang ORDER BY KH_MA DESC LIMIT $start, 10";
        
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
                <th>Email</th>
                <th>Tài Khoản</th>
                <th>Tùy Chọn</th>                  
            </tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
       
        echo"<tr> <td>" . $row["KH_MA"] . "</td>";
        echo" <td>" . $row["KH_HOTEN"] . "</td>";
        echo" <td>" . $row["KH_SDT"] . "</td>";
        echo" <td>" . $row["KH_EMAIL"] . "</td>";
        echo" <td>" . $row["KH_USER"] . "</td>";
        echo" <td style = 'text-align: center;'>
                <button>
                    <a href = 'ad_index.php?act=quanlykhachhangchitiet&idkh=".$row['KH_MA']."' style = 'text-decoration: none; color: black;'>
                        Xem Chi Tiết
                    </a>
                </button>
            </td>
        
        </tr>";   
    }
    echo "</table>";
} 
else {
    echo "Không có du lieu";
}
?>
<ul class = "list_pages">
    <li>
       <?php list_page('khachhang', 'ad_index.php?act=quanlykhachhang&trang=', $connect); ?>
    </li>
</ul>
