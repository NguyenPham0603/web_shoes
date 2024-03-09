<?php
  include("action/sp_xuly_masp.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script language="javascript" src="../js/showImage_xly.js"></script>

<h2 style = "text-align: center; font-weight:bold;">Thêm sản phẩm</h2>
<table border = "1" class = "table table-bordered border-primary" style = "text-align:left; width: 65%; margin-left: 17%; font-size:20px;">
  <form method = "POST" action = "action/sp_xuly.php" enctype = "multipart/form-data">
    <tr>
        <th>Mã Sản Phẩm:</th>
        <td>
          <input readonly = "true" type="text" name = "masp" size = "50" value = "<?php echo("SP".$idNew); ?>">
        </td>
      </tr>
      <tr>
        <th>Mã Loại Sản Phẩm:</th>
        <td>
          <select name="maloaisp" id="">
            <?php
              $sql = "SELECT * FROM loai_sp ORDER BY LSP_MA ASC";
              $query = mysqli_query($connect, $sql);
              while ($row = mysqli_fetch_array($query)) {
            ?>
              <option value="<?php echo $row['LSP_MA'] ?>">
                  <?php echo $row['LSP_TEN'] ?>
              </option>
            <?php
              }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <th>Tên Sản Phẩm:</th>
        <td><input type="text" name = "tensp" size = "50"></td>
      </tr>
      <tr>
        <th>Thông Tin sản Phẩm:</th>
        <td><textarea name="thongtinsp" id="ttsp" cols="20" rows="5"  style = "width:98%;"></textarea></td> 
      </tr>
      <tr>
        <th>Giá Bán:</th>
        <td>
          <input type="text" name = "giaban" size = "50" placeholder = "Thêm giá sản phẩm">
        </td>
      </tr>
      <tr>
        <th>Số Lượng:</th>
        <td><input type="number" name = "soluong" size = "50" min = "1" value = "Thêm số lượng"></td>
      </tr>
      <tr>
        <th>Hình Ảnh:</th>
        <td>
          <img src = "" id = "image" style = "width: 100px; height: 100px;">
          <br>
          <input type="file" name = "themanh" onchange = "chooseFile(this)" accept=".png, .jpg, .jpeg, image">
        </td>
      </tr>
      <tr>
        <td colspan = "2" style = "text-align:right;">
          <button style = "background: none; border: none;">
            <i class="fa-regular fa-square-check fa-2xl" style="color: #ff0080;"></i>
          </button>
        </td>
      </tr>    
  </form>
</table>
<h2 style = 'text-align: center; font-weight:bold; margin-top:30px;'>Danh Sách Sản Phẩm</h2>
<?php
  include("action/sp_xuly_hienthidata.php");

  $connect->close();
?>