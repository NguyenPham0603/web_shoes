<?php
include('../admin/functions/list_pages.php');
include('../admin/functions/cut_pages.php');
// Câu SQL lấy danh sách
$sql = "SELECT * FROM sanpham ORDER BY SP_MA ASC LIMIT $start, 10";
 
// Thực thi câu truy vấn và gán vào $result
$result = mysqli_query($connect, $sql);
echo "<h2 style = 'text-align:center; font-weight: bold;'>Danh Sách Sản Phẩm</h2>";
// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
if (mysqli_num_rows($result) > 0) {
    // Sử dụng vòng lặp while để lặp kết quả  
    echo "<table border='1' class = 'table table-striped table-bordered' style = 'vertical-align: middle;'>
            <tr style='text-align:center;'>
                <th>Mã Sản Phẩm</th>
                <th>Mã Loại Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Thông Tin Sản Phẩm</th>
                <th>Giá Bán</th>
                <th>Số Lượng</th>
                <th>Hình Ảnh</th>                 
            </tr>";
    while($row = mysqli_fetch_assoc($result)) {
       
        echo"<tr> <td>" . $row["SP_MA"] . "</td>";
        echo" <td>" . $row["LSP_MA"] . "</td>";
        echo" <td>" . $row["SP_TEN"] . "</td>";
        echo" <td>" . substr($row['SP_THONGTIN'], 0, 100) . "</td>";
        echo" <td>" . number_format($row["SP_GIA"],0,',','.').'đ' . "</td>";
        echo" <td>" . $row["SP_SOLUONG"] . "</td>";
?>
            <td style = "text-align: center;"><img src = "../admin/module/Upload/<?php echo $row['SP_HINHANH'] ?>" style = "width: 35%;"></td>
        </tr>
<?php    
    }
    echo "</table>";
} 
else {
    echo "Không có du lieu";
}
?>
<ul class = "list_pages">
    <li>
        <?php list_page('sanpham', 'index_emp.php?act=sanpham&trang=', $connect);?>
    </li>
</ul>