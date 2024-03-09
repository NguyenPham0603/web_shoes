<?php
include('config/config.php');
$id = $_GET['spID'];
$sql_delImg = "SELECT * FROM sanpham WHERE SP_MA = '$id' LIMIT 1";
$query = mysqli_query($connect, $sql_delImg);
while($row = mysqli_fetch_array($query)){
    unlink('module/Upload/'.$row['SP_HINHANH']);
}
    
$sql = "DELETE FROM sanpham WHERE SP_MA='" . $id ."'";
if(mysqli_query($connect, $sql)){
    echo "Xóa thành công ". $id;
    // echo "<br><a href='ad_index.php?act=quanlysanpham'>Quay ve trang sua</a>";
    header('Location: ad_index.php?act=quanlysanpham');

} else{
    echo "ERROR: Không thể thực thi truy vấn $sql. " . mysqli_error($connect);
}


$connect->close();
?>
