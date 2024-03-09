<script language="javascript" src = "../js/Show_Mess.js"></script>
<?php
include('../admin/functions/list_pages.php');
include('../admin/functions/cut_pages.php');
// Câu SQL lấy danh sách
$sql = "SELECT * FROM loai_sp ORDER BY LSP_MA ASC LIMIT $start, 10";
echo "<h2 style = 'text-align:center; font-weight: bold;'>Danh Sách Loại Sản Phẩm</h2>";
// Thực thi câu truy vấn và gán vào $result
$result = mysqli_query($connect, $sql);
 
// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
if (mysqli_num_rows($result) > 0) {
    // Sử dụng vòng lặp while để lặp kết quả
    echo "<table border='1' class = 'table table-striped table-bordered' style = 'vertical-align: middle; width: 85%; margin-left: 8%; font-size:25px;'>
            <tr style='text-align:center;'>
                <th>Mã Loại Sản Phẩm</th>
                <th>Tên Loại Sản Phẩm</th>                   
            </tr>";
    while($row = mysqli_fetch_assoc($result)) {
       
        echo"<tr> <td>" . $row["LSP_MA"] . "</td>";
        echo" <td style = 'text-align: left;'>" . $row["LSP_TEN"] . "</td>
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
        <?php list_page('loai_sp', 'index_emp.php?act=loaisanpham&trang=', $connect);?>
    </li>
</ul>
