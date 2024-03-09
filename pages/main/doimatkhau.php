<script language="javascript" src="../../js/Error.js"></script>
<form method = "POST" action = "action/doimatkhau_xuly.php" autocomplete = "off" onsubmit="return check_error();"  style = "margin: 20px 30%;">
    <div class="mb-3">
        <label for="inputPassword3" class="form-label" >
            <i class="fa-solid fa-circle-user fa-2xl" style="color: #ff0080;"></i>
            Tên Đăng Nhập:
        </label>
        <input type="text" class="form-control" id="inputEmail3" name = "user" placeholder = "Tên Đăng Nhập"
                    <?php if(isset($_SESSION['dangnhap'])){
                                echo "value = '".$_SESSION['dangnhap']."'";
                                echo 'readonly=true';
                            }
                            else{
                                echo '';
                            }
                    ?>>
    </div>
    <?php if(isset($_SESSION['dangnhap'])){?>
    <div class="mb-3">
        <label for="inputPassword3" class="form-label" >
            <i class="fa-solid fa-lock fa-2xl" style="color: #ff0080;"></i>
            Mật Khẩu Cũ:
        </label>
        <input type="password" class="form-control" id="inputPassword3" name = "pass_old" placeholder="Nhập mật khẩu cũ">      
    </div>
    <?php 
        }
        else{?>
            <div class="mb-3">
                <label for="inputEmail3" class="form-label" >
                    <i class="fa-solid fa-envelope fa-2xl" style="color: #ff0080;"></i>
                    Email:
                </label>
                <input type="email" class="form-control" id="inputEmail3" name = "email" placeholder="Nhập email">      
            </div>
    <?php
        }
    ?>
    <div class="mb-3">
        <label for="inputPassword3" class="form-label">
            <i class="fa-solid fa-key fa-2xl" style="color: #ff0080;"></i>
            Mật Khẩu Mới:
        </label>
        <input type="password" class="form-control" id="inputPassword3" name = "pass_new" placeholder="Nhập mật khẩu mới">
            
    </div>
    <button type="submit" class="btn btn-primary" name = "doimatkhau" style = "margin: 6px 90px; float: left;">Đổi Mật Khẩu</button>
</form>
<button class="btn btn-primary" type = "button" >Đăng Nhập</button>