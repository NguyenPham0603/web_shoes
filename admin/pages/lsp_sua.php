<?php
    include('config/config.php');
    $ID = $_GET['lspID'];
    $sql = "SELECT * FROM loai_sp WHERE LSP_MA = '".$ID."'";
    $tenlsp = '';
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_assoc($result)) {
         $tenlsp = $row["LSP_TEN"];
    }

?>
<div style="font-size:30px; font-weight: bold; text-align: center;">Sửa Loại Sản Phẩm có Mã Loại:<?php echo $ID; ?></div> 
    <form method = "POST" action = "action/lsp_xuly_sua.php">
        <table border = "1" class = "table table-bordered border-primary" style = "text-align:center; vertical-align: middle; width: 55%; margin-left: 22%; font-size:20px;">
            <tr>
                <th>Mã Loại Sản Phẩm</th>
                <td>
                    <input type = "text" readonly="true" name = "malsp" style ="padding: 5px; margin: 5px; width: 89%;" value = "<?php echo $ID; ?>">
                </td>
                
                <td rowspan = '2' style = "text-align: center">
                    <button style = "background-color: white; border: 0;">
                        <i class="fa-regular fa-square-check fa-2xl" style="color: #ff0080;"></i>
                    </button>    
                </td>
            </tr>
            <tr>
                <th>Tên Loại Sản Phẩm</th>
                <td>
                    <input type = "text" name = "tenlsp" style ="padding: 5px; margin: 5px; width: 89%;" value = "<?php echo $tenlsp; ?>">
                </td>
            </tr>
        </table>
    </form>
<?php
    $connect->close();
?>