<script language="javascript" src = "../js/Show_Mess.js"></script>
<?php
include('functions/list_pages.php');
include('functions/cut_pages.php');
// Câu SQL lấy danh sách
$sql = "SELECT * FROM nhacungcap ORDER BY NCC_MA DESC LIMIT $start, 10";
 
// Thực thi câu truy vấn và gán vào $result
$result = mysqli_query($connect, $sql);
 
// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
if (mysqli_num_rows($result) > 0) {
    // Sử dụng vòng lặp while để lặp kết quả  
    echo "<table border='1' class = 'table table-striped table-bordered' style = 'vertical-align: middle; width: 100%; font-size:18px;'>
            <tr style='text-align:center;'>
                <th>Mã Nhà Cung Cấp</th>
                <th>Tên Nhà Cung Cấp</th>
                <th>Số Điện Thoại</th>
                <th>Địa Chỉ</th>
                <th colspan='2'>Tùy Chọn</th>                    
            </tr>";
    while($row = mysqli_fetch_assoc($result)) {
       
        echo"<tr> <td>" . $row["NCC_MA"] . "</td>";
        echo" <td>" . $row["NCC_TEN"] . "</td>";
        echo" <td>" . $row["NCC_SDT"] . "</td>";
        echo" <td>" . $row["NCC_DIACHI"] . "</td>";
?> 

            <td style='text-align: center;'>
                <a class="btn btn-outline-light" onclick="show_message('<?php echo $row['NCC_MA']; ?>','ad_index.php?act=suancc&nccID=' ,'Bạn Có Muốn Sửa Nhà Cung Cấp Này?')">
                    <i class='fa-solid fa-pen-to-square fa-lg'></i>
                </a>
            </td>
            <td style='text-align: center;'>
                <a class="btn btn-outline-light" onclick="show_message('<?php echo $row['NCC_MA']; ?>','ad_index.php?act=xoancc&nccID=' ,'Bạn Có Muốn Xóa Nhà Cung Cấp Này?')">
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
        <?php list_page('nhacungcap', 'ad_index.php?act=quanlynhacungcap&trang=', $connect);?>
    </li>
</ul>