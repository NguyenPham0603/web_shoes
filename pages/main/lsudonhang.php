<script language="javascript" src = "../js/Show_Mess.js"></script>
<center>
    <h2>Đơn Hàng Của Bạn</h2>
</center>

<?php
    include('../admin/functions/list_pages.php');
    include('../admin/functions/cut_pages.php');
    include('../admin/config/config.php');
    $id_khachhang = $_SESSION['id_kh'];

    // Câu SQL lấy danh sách
    $sql = "SELECT * FROM hoadon h 
            JOIN khachhang k ON h.KH_MA = k.KH_MA
            -- JOIN nhanvien n ON h.NV_MA = n.NV_MA
            WHERE k.KH_MA = '".$id_khachhang."'
            ORDER BY HD_TRANGTHAI ASC, HD_MA DESC 
            LIMIT $start, 10";
    // Thực thi câu truy vấn và gán vào $result
    $result = mysqli_query($connect, $sql);
    // Kiểm tra số lượng record trả về có lơn hơn 0
    // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
    if (mysqli_num_rows($result) > 0) { 
        // Sử dụng vòng lặp while để lặp kết quả  
        echo "<table border='1' class = 'table table-striped table-bordered' style = 'vertical-align: middle;'>
                <tr style='text-align:center;'>
                    <th>Mã Đơn Hàng</th>
                    <th>Tên Khách Hàng</th>
                    <th>Ngày Đặt Hàng</th>
                    <th>Số Điện Thoại</th>
                    <th>Địa Chỉ Giao Hàng</th>
                    <th>Trạng Thái</th>
                    <th>Tùy Chọn</th>                    
                </tr>";
        while($row = mysqli_fetch_assoc($result)) {
                echo"<tr> <td>" . $row["HD_MA"] . "</td>";
                echo "<td>" . $row["KH_HOTEN"] . "</td>";
                $date = date_create($row['HD_NGAYLAP']);
                echo "<td>" . date_format($date, 'd-m-Y H:i:s') . "</td>";
                echo "<td>" . $row['KH_SDT'] . "</td>";
                echo "<td>" . $row['KH_DCHI'] . "</td>";

                if($row['HD_TRANGTHAI'] == 1){
                    echo "<td style = 'text-align: center; color: red; font-weight: bold;'> Chờ Xử Lý </td>";
                }
                else if($row['HD_TRANGTHAI'] == 2){
                    echo "<td style = 'text-align: center; color:green;'> Chờ Giao Hàng </td>";
                }
                else if($row['HD_TRANGTHAI'] == 3){
                    echo "<td style = 'text-align: center; color:blue; font-weight: bold;'> Đã Nhận Hàng </td>";
                }
                else if($row['HD_TRANGTHAI'] == 4){
                    echo "<td style = 'text-align: center; color:blue;'> Đã Nhận Hàng </td>";
                }
                else if($row['HD_TRANGTHAI'] == 5){
                    echo "<td style = 'text-align: center; color:red;'> Đơn Hàng Đã Hủy </td>";
                }
            
?>
    <td style = 'text-align: center;'>
        <button name = 'xemchitiet'>
            <a href="index.php?quanly=donhangchitiet&id=<?php echo $row['HD_MA']; ?>" style = 'text-decoration: none; color: black;'>
                Xem Chi Tiết
            </a>
        </button>
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
         <?php list_page('hoadon', 'index.php?quanly=lichsu&trang=', $connect);?>
     </li>
</ul>
