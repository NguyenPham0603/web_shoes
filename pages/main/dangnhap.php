<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="icon" href="../../images/icon/Logo1.jpg" type="image/jpg">
    <title>ĐĂNG NHẬP</title>
</head>
<body class = "login_body">
    <div class = "login_usr">
        <form method = "POST" action = "../action/dnhap_xuly.php" autocomplete = "off">
            <img style = "width:150px; height:150px; margin-left: 132px; border-radius: 100%;" src="../../images/icon/Logo1.jpg">
            <div class="mb-3">
                <label for="inputEmail3" class="form-label" >
                    <i class="fa-solid fa-circle-user fa-2xl" style="color: #ff0080;"></i>
                    Tên Đăng Nhập:
                </label>
                
                <input type="text" class="form-control" id="inputEmail3" name = "user" placeholder="Nhập Tên đăng nhập">
                
            </div>
            <div class="mb-3">
                <label for="inputPassword3" class="form-label">
                    <i class="fa-solid fa-lock fa-2xl" style="color: #ff0080;"></i>
                    Mật Khẩu:
                </label>
            
                <input type="password" class="form-control" id="inputPassword3" name = "pass" placeholder="Nhập mật khẩu">
            
            </div>
            <button type="submit" class="btn btn-primary" name = "dangnhap" style = "margin: 5px 153px;">Đăng nhập</button>
            <div>
                <a href="dangky.php" style = "text-decoration: none;">Bạn chưa có tài khoản?</a>
            </div>
            <div>
                <a href="../index.php?quanly=thaydoimk" style = "text-decoration: none;">Quên mật khẩu?</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>