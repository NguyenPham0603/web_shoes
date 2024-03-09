<script language="javascript" src = "../js/Show_Mess.js"></script>
<?php
include('functions/list_pages.php');
include('functions/cut_pages.php');

// Câu SQL lấy danh sách
$sql = "SELECT * FROM nhanvien ORDER BY NV_MA DESC LIMIT $start, 10";
 
// Thực thi câu truy vấn và gán vào $result
$result = mysqli_query($connect, $sql);
 
// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
if (mysqli_num_rows($result) > 0) {
    // Sử dụng vòng lặp while để lặp kết quả  
    echo "<table border='1' class = 'table table-striped table-bordered' style = 'vertical-align: middle; width: 100%; font-size:16px;'>
            <tr style='text-align:center;'>
                <th>Mã Nhân Viên</th>
                <th>Họ Tên</th>
                <th>Ngày Sinh</th>
                <th>Căn Cước Công Dân</th>
                <th>Số Điện Thoại</th>
                <th>Địa Chỉ</th>
                <th>Lương</th>
                <th>Tài Khoản</th>
                <th>Mật Khẩu</th>
                <th colspan='2'>Tùy Chọn</th>                    
            </tr>";
    while($row = mysqli_fetch_assoc($result)) {
       
        echo"<tr> <td>" . $row["NV_MA"] . "</td>";
        echo" <td>" . $row["NV_HOTEN"] . "</td>";
        $date = date_create($row["NV_NGSINH"]);
        echo" <td>" . date_format($date, 'd-m-Y') . "</td>";
        echo" <td>" . $row["NV_CCCD"] . "</td>";
        echo" <td>" . $row["NV_SDT"] . "</td>";
        echo" <td>" . $row["NV_DCHI"] . "</td>";
        echo" <td>" . number_format($row["NV_LUONG"],0,',','.').'đ' . "</td>";
        echo" <td>" . $row["NV_USER"] . "</td>";
        echo" <td>" . $row["NV_PW"] . "</td>";
?>

            <td style='text-align: center;'>
                <a class="btn btn-outline-light" onclick="show_message('<?php echo $row['NV_MA']; ?>','ad_index.php?act=suanv&nvID=' ,'Bạn Có Muốn Sửa Thông Tin Nhân Viên Này?')">
                    <i class='fa-solid fa-pen-to-square fa-sm'></i>
                </a>
            </td>
            <td style='text-align: center;'>
                <a class="btn btn-outline-light" onclick="show_message('<?php echo $row['NV_MA']; ?>','ad_index.php?act=xoanv&nvID=' ,'Bạn Có Muốn Xóa Thông Tin Nhân Viên Này?')">
                    <i class='far fa-trash-alt fa-sm'></i>
                </a>
            </td>
        </tr>
<?php    
    }
    echo "</table>";
} 
else {
    echo "Không có dữ liệu";
}
?>
<ul class = "list_pages">
    <li>
        <?php list_page('nhanvien', 'ad_index.php?act=quanlynhanvien&trang=', $connect);?>
    </li>
</ul>