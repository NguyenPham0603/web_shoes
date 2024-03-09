<script language="javascript" src = "../js/Show_Mess.js"></script>

<?php
include('functions/list_pages.php');
include('functions/cut_pages.php');

// Câu SQL lấy danh sách
$sql = "SELECT * FROM sanpham ORDER BY SP_MA DESC LIMIT $start, 10";
 
// Thực thi câu truy vấn và gán vào $result
$result = mysqli_query($connect, $sql);
 
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
                <th colspan='2'>Tùy Chọn</th>                    
            </tr>";
    while($row = mysqli_fetch_assoc($result)) {
       
        echo"<tr> <td>" . $row["SP_MA"] . "</td>";
        echo" <td>" . $row["LSP_MA"] . "</td>";
        echo" <td>" . $row["SP_TEN"] . "</td>";
        echo" <td>" . substr($row['SP_THONGTIN'], 0, 100) . "</td>";
        echo" <td>" . number_format($row["SP_GIA"],0,',','.').'đ' . "</td>";
        echo" <td>" . $row["SP_SOLUONG"] . "</td>";
?>
            <td style = "text-align: center;"><img src = "module/Upload/<?php echo $row['SP_HINHANH'] ?>" style = "width: 35%;"></td>

            <td style='text-align: center;'>
                <a class="btn btn-outline-light" onclick="show_message('<?php echo $row['SP_MA']; ?>','ad_index.php?act=suasp&spID=' ,'Bạn Có Muốn Sửa Sản Phẩm Này?')">
                    <i class='fa-solid fa-pen-to-square fa-lg'></i>
                </a>
            </td>
            <td style='text-align: center;'>
                <a class="btn btn-outline-light" onclick="show_message('<?php echo $row['SP_MA']; ?>','ad_index.php?act=xoasp&spID=' ,'Bạn Có Muốn Xóa Sản Phẩm Này?')">
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
        <?php list_page('sanpham', 'ad_index.php?act=quanlysanpham&trang=', $connect);?>
    </li>
</ul>
