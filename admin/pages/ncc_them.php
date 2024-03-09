<?php
  include("action/ncc_xuly_mancc.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script language="javascript" src="../js/showImage_xly.js"></script>

<h2 style = "text-align: center; font-weight:bold;">Thêm Nhà Cung Cấp</h2>
<table border = "1" class = "table table-bordered border-primary" style = "text-align:left; width: 65%; margin-left: 17%; font-size:20px;">
  <form method = "POST" action = "action/ncc_xuly.php" enctype = "multipart/form-data">
    <tr>
        <th>Mã Nhà Cung Cấp:</th>
        <td>
          <input readonly = "true" type="text" name = "mancc" size = "50" value = "<?php echo("NCC".$idNew); ?>">
        </td>
      </tr>
      <tr>
        <th>Tên Nhà Cung Cấp:</th>
        <td><input type="text" name = "tenncc" size = "50" placeholder = "Thêm tên nhà cung cấp"></td>
      </tr>
      <tr>
        <th>Số Điện Thoại:</th>
        <td>
          <input type="text" name = "sdt" size = "50" placeholder = "Thêm số điện thoại">
        </td>
      </tr>
      <tr>
        <th>Địa Chỉ:</th>
        <td><input type="text" name = "dchi" size = "50" placeholder = "Thêm địa chỉ"></td>
      </tr>
      <tr>
        <td colspan = "2" style = "text-align:right;">
          <button style = "background-color: white; border: 0;">
            <i class="fa-regular fa-square-check fa-2xl" style="color: #ff0080;"></i>
          </button>
        </td>
      </tr>
  </form>
</table>
<h2 style = 'text-align: center; font-weight:bold; margin-top:30px;'>Danh Sách Sản Phẩm</h2>
<?php
  include("action/ncc_xuly_hienthidata.php");

  $connect->close();
?>