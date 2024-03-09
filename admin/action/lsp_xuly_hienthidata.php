<script language="javascript" src = "../js/Show_Mess.js"></script>
<?php
include('functions/list_pages.php');
include('functions/cut_pages.php');
// Câu SQL lấy danh sách
$sql = "SELECT * FROM loai_sp ORDER BY LSP_MA DESC LIMIT $start, 10";
 
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
                <th colspan='2'>Tùy Chọn</th>                    
            </tr>";
    while($row = mysqli_fetch_assoc($result)) {
       
        echo"<tr> <td>" . $row["LSP_MA"] . "</td>";
        echo" <td style = 'text-align: left;'>" . $row["LSP_TEN"] . "</td>";
?>
        <td style='text-align: center;'>
            <a class="btn btn-outline-light" onclick="show_message('<?php echo $row['LSP_MA']; ?>','ad_index.php?act=sualoaisp&lspID=' ,'Bạn Có Muốn Sửa Loại Sản Phẩm Này?')">
                <i class='fa-solid fa-pen-to-square fa-lg'></i>
            </a>
        </td>
        <td style='text-align: center;'>
                <a  class="btn btn-outline-light" onclick="show_message('<?php echo $row['LSP_MA']; ?>','ad_index.php?act=xoaloaisp&lspID=' ,'Bạn Có Muốn Xóa Loại Sản Phẩm Này?')">
                    <i class='far fa-trash-alt fa-lg'></i>
                </a>
            </td>
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
        <?php list_page('loai_sp', 'ad_index.php?act=quanlyloaisanpham&trang=', $connect);?>
    </li>
</ul>
