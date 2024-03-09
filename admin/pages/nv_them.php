<?php
  include("action/nv_xuly_manv.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script language="javascript" src="../js/showImage_xly.js"></script>

<h2 style = "text-align: center; font-weight:bold;">Thêm nhân viên mới</h2>
<table border = "1" class = "table table-bordered border-primary" style = "text-align:left; width: 65%; margin-left: 17%; font-size:20px;">
  <form method = "POST" action = "action/nv_xuly.php" enctype = "multipart/form-data">
    <tr>
        <th>Mã Nhân Viên:</th>
        <td>
          <input readonly = "true" type="text" size="50" name = "manv" value = "<?php echo("NV".$idNew); ?>">
        </td>
    </tr>
    <tr>
        <th>Họ và Tên:</th>
        <td>
           <input type="text" name = "tennv" size="50" placeholder = "Nhập họ tên nhân viên">
        </td>
    </tr>
    <tr>
        <th>Ngày Sinh:</th>
        <td><input type="date" name = "nsinh"></td>
    </tr>
    <tr>
        <th>Căn Cước Công Dân:</th>
        <td>
            <input type="text" name = "cccd" size="50" placeholder = "Nhập số căn cước công dân">
            <!-- <textarea name="cccd" id="cccd" cols="30" rows="10"  style = "width:98%;"></textarea> -->
        </td> 
    </tr>
    <tr>
        <th>Số Điện Thoại:</th>
        <td>
          <input type="text" name = "sdt" size="50" placeholder = "Nhập số điện thoại">
        </td>
    </tr>
    <tr>
        <th>Địa Chỉ:</th>
        <td><input type="text" name = "dchi" size="50" placeholder = "Nhập địa chỉ"></td>
    </tr>
    <tr>
        <th>Lương:</th>
        <td>
            <input type="text" name = "luong" size="50" placeholder = "Nhập lương nhân viên">
        </td>
        
    </tr>
    <tr>
        <th>Tài Khoản Nhân Viên:</th>
        <td><input type="text" name = "user" size="50" placeholder = "Nhập Tài Khoản"></td>
    </tr>
    <tr>
        <th>Mật Khẩu:</th>
        <td><input type="text" name = "pass" size="50" placeholder = "Nhập mật khẩu"></td>
    </tr>
    <tr>
        <td colspan = "2" style = "text-align:right;">
          <button style = "background-color: white; border: 0;">
            <i class="fa-regular fa-square-plus fa-2xl" style="color: #ff0080;"></i>
          </button>
          <!-- <input type="submit" name = "themnv" value = "Thêm"> -->
        </td>
    </tr>    
  </form>
</table>
<h2 style = 'text-align: center; margin-top:30px; font-weight:bold;'>Danh Sách Nhân Viên</h2>
<?php
  include("action/nv_xuly_hienthidata.php");

  $connect->close();
?>