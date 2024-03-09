<?php
  include("action/lsp_xuly_maloai.php");
?>
<h2 style = "text-align: center; font-weight: bold;">Thêm loại sản phẩm</h2>
<table border=1 class = "table table-bordered border-primary" style = "text-align:center; vertical-align: middle; width: 55%; margin-left: 22%; font-size:20px;">
  <form method = "POST" action = "action/lsp_xuly.php">  
    <tr>
      <th>Mã Loại Sản Phẩm:</th>
      <th >Tên Loại Sản Phẩm:</th>
      <th rowspan = "2" style = "text-align: center;">
        <button style = "background-color: white; border: 0;">
          <i class="fa-regular fa-square-check fa-2xl" style="color: #ff0080;"></i>
        </button>
      </th>
    </tr>
    <tr>
      <td>
        <input readonly = "true" value = "<?php echo("LSP".$idNew); ?>" type = "text" name = "malsp">
      </td>
      <td><input type = "text" name = "tenlsp"></td>
    </tr>
     
  </form>
</table>
<br>
<h2 style="text-align: center; margin-top:30px; font-weight: bold;">Danh Sách Loại Sản Phẩm</h2>


<?php
  include("action/lsp_xuly_hienthidata.php");

  $connect->close();
?>
