<?php
    include('action/login_action.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
        <link rel="icon" href="../images/icon/Logo1.jpg" type="image/jpg">
        <title>Login Admin</title>

        <style type = "text/css">
            body{
                background: #f2f2f2;
            }
            .wrapper_login{
                width: 30%;
                margin: 0 auto;
            }
            .form-label{
                font-weight: bold;
                font-size: 20px;
            }
        </style>

    </head>
    <body>
        
        <div class = "wrapper_login">
            <form action="" autocomplete = "off" method = "POST">
                <img style = "width:150px; height:150px; margin-left: 132px; border-radius: 100%;" src="../images/icon/Logo1.jpg">
                <div class="mb-3">
                    <label for="inputEmail3" class="form-label" >Username: </label>
                    <input type="text" class="form-control" id="inputEmail3" name = "username">
                </div>
                <div class="mb-3">
                    <label for="inputPassword3" class="form-label">Password: </label>
                    <input type="password" name = "password" class="form-control" id="inputPassword3">
                </div>
                <button type="submit" class="btn btn-primary" name = "signIn" style = "margin: 5px 153px;">Sign In</button>
                <!-- <p><a href="login.php?act=dangnhapnv">Bạn là nhân viên??</a></p> -->
            </form>
        </div>
    </body>
</html>
<?php
    $connect->close();
?>

<!-- <form method = "POST" action = "action/dnhap_xuly.php" autocomplete = "off" style = "height: auto; width: 34%; margin: 15px auto;">
        <div class="mb-3">
            <label for="inputEmail3" class="form-label" >Tên đăng nhập: </label>
            
            <input type="text" class="form-control" id="inputEmail3" name = "user" placeholder="Nhập Tên đăng nhập">
            
        </div>
        <div class="mb-3">
            <label for="inputPassword3" class="form-label">Mật khẩu: </label>
          
            <input type="password" class="form-control" id="inputPassword3" name = "pass" placeholder="Nhập mật khẩu">
        
        </div>
        <button type="submit" class="btn btn-primary" name = "dangnhap" style = "margin: 5px 153px;">Đăng nhập</button>
        <div>
            <a href="index.php?quanly=dangky" style = "text-decoration: none;">Bạn chưa có tài khoản?</a>
        </div>
        <div>
            <a href="" style = "text-decoration: none;">Quên mật khẩu?</a>
        </div>
    </form> -->