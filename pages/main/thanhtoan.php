<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script language="javascript" src = "../js/Show_Mess.js"></script>
    <link rel="stylesheet" href="../../css/style.css" type = "text/css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Thanh Toán</title>
</head>
<body>
    <div class = "wrapper_detail_bill">
        <button style = "margin-top: 15px;">
            <a href="../index.php?quanly=giohang" style = "float: left; text-decoration:none; color:black;">
                Quay về
                <!-- <i class="fa-solid fa-angle-left fa-xl" style="color: #ff0080;"></i> -->
            </a>
        </button>
        
        <div class = "clear"></div>
        <h1 style = "text-align: center; margin-top: 15px; font-weight: bold;">Chi tiết đơn hàng</h1>
        <?php
            session_start();
            include("../../admin/config/config.php");
            if(isset($_SESSION['dangnhap'])){
                echo "<h2>Tên Khách Hàng: ".$_SESSION['dangnhap']."</h2>";
                $sql_kh = "SELECT * FROM khachhang WHERE KH_USER = '".$_SESSION['dangnhap']."'";
                $result_kh = mysqli_query($connect, $sql_kh);
                $row = mysqli_fetch_array($result_kh);
                $_SESSION['diachi'] = $row['KH_DCHI'];
        ?>
            <h3 style = "float: left; padding: 0 10px 0 0;"> Địa Chỉ Giao Hàng: <?php  echo $_SESSION['diachi'];?></h3>
            <button style = "border: none; background: none; outline:none; border-radius: 5px;"
                    onclick="document.getElementById('ID01').style.display='block'" style="width:auto;">
                <i class="fa-solid fa-angle-right fa-xl" style="color: #ff0080;"></i>
            </button>
            <div class = "clear"></div>
        <?php
                
            }

            $sql = "SELECT * FROM sanpham LIMIT 1";
            $result = mysqli_query($connect, $sql);
        ?>
        <form method = "POST" action="../action/hd_xuly_dathang.php">
            <table style = "font-size: 30px;" class = "table table-striped">
                <tr style =  "text-align: center;">
                    <th>Sản Phẩm</th>        
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                </tr>
                    
                <?php
                    while($row = mysqli_fetch_array($result)){
                        $i = 0;
                        $tongtien = 0;   
                        foreach($_SESSION['cart'] as $cart_item){
                            $thanhtien = $cart_item['soluong'] * $cart_item['gia']; 
                            $tongtien += $thanhtien;
                            $i++;
                ?>
                <tr style = "vertical-align: middle;">
                    <td><?php echo $cart_item['masanpham'].' - '.$cart_item['tensanpham'];?></td>
                    <td style = "text-align: center;"><?php echo $cart_item['soluong']; ?></td>
                    <td><?php echo number_format($cart_item['gia'],0,',','.').' VND';?></td>
                    <td><?php echo number_format($thanhtien, 0, ',', '.').'VND'?></td>
                </tr>
                <?php   
                    }
                ?>
                <tr>
                    <td colspan = "4" style = "text-align:center;">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.').'VND'; ?></td>
                </tr>
                <tr>
                    <td colspan = "4" style = "text-align: center;">
                        <button class = "cart">Thanh Toán</button>
                    </td>
                </tr>
            </table>
        </form> 
    </div>

    <?php
        }
    ?>

    <div id="ID01" class="modal" tabindex="-1"  style = "font-family: 'Times New Roman';">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Nhập địa chỉ giao hàng: </h2>
                    <button onclick="document.getElementById('ID01').style.display='none'" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            style = "position: absolute; right: 25px;"></button>
                </div>
                <form action="../action/nhapdiachi_xuly.php" method = "POST" class="modal-content">
                    <div class="modal-body">
                        <p>Số nhà, Đường, Xã/Phường/Thị Trấn, Quận/Huyện, Thành Phố</p>
                        <textarea name="thongtindchi" id="ttdc" cols="55" rows="5"><?php echo $_SESSION['diachi']; ?></textarea>
                    </div>
                    <div class="modal-footer">
                        <button onclick="document.getElementById('ID01').style.display='none'" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name = "diachigh">Thay Đổi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Get the modal
        var modal1 = document.getElementById('ID01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
        }
    </script>
</body>
</html>
