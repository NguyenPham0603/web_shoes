<?php
    include('../action/kh_xuly_makh.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <script language="javascript" src="../../js/Error.js"></script>

    <link rel="icon" href="../../images/icon/Logo1.jpg" type="image/jpg">
    <title>ĐĂNG KÝ</title>
</head>
<body class = "login_body">
    <div class = "register">
        <form action="../action/kh_xuly_dky.php" name="signupFrm" onsubmit="return check_error();" method= "POST" autocomplete = "off">
            <!-- <p id="error"></p> -->
            <img style = "width:150px; height:150px; margin-left: 132px; margin-bottom:20px; border-radius: 100%;" src="../../images/icon/Logo1.jpg">
            <div class="row mb-2">
                <label for="inputEmail3" class="col-lg-2 col-form-label" >
                    <i class="fa-solid fa-id-card fa-2xl" style="color: #ff0080;"></i>
                </label>
                <div class="col-lg-2 col-xl-5">
                    <input class="form-control" readonly = "true" value = "<?php echo("KH".$idNew); ?>" type="text" name = "makh">
                </div>
            </div>
            <div class="row mb-2">
                <label class="col-lg-2 col-form-label">
                    <i class="fa-solid fa-address-book fa-2xl" style="color: #ff0080;"></i>
                </label>
                <div class="col-lg-2 col-xl-5">
                    <input type="text" class="form-control" name = "hoten" placeholder="Nhập họ và tên">
                </div>
            </div>
            <div class="row mb-2">
                <label class="col-lg-2 col-form-label">
                    <i class="fa-solid fa-calendar-days fa-2xl" style="color: #ff0080;"></i>
                </label>
                <div class="col-lg-2 col-xl-5">
                    <input type="date" class="form-control" name = "ngaysinh">
                </div>
            </div>
            <div class="row mb-2">
                <label class="col-lg-2 col-form-label">
                    <i class="fa-solid fa-phone fa-2xl" style="color: #ff0080;"></i>
                </label>
                <div class="col-lg-2 col-xl-5">
                    <input type="text" class="form-control" name = "sdt" placeholder="Nhập số điện thoại">
                </div>
            </div>
            <div class="row mb-2">
                <label for="inputEmail3" class="col-lg-2 col-form-label">
                    <i class="fa-solid fa-envelope fa-2xl" style="color: #ff0080;"></i>
                </label>
                <div class="col-lg-2 col-xl-5">
                    <input type="email" class="form-control" id="inputEmail3" name = "email" placeholder="Nhập email">
                </div>
            </div>
            <div class="row mb-2">
                <label class="col-lg-2 col-form-label">
                    <i class="fa-solid fa-location-dot fa-2xl" style="color: #ff0080;"></i>
                </label>
                <div class="col-lg-2 col-xl-5">
                    <input type="text" class="form-control" name = "dchi" placeholder="Nhập địa chỉ">
                </div>
            </div>
            <div class="row mb-2">
                <label  class="col-lg-2 col-form-label">
                    <i class="fa-solid fa-circle-user fa-2xl" style="color: #ff0080;"></i>
                </label>
                <div class="col-lg-2 col-xl-5">
                    <input type="text" class="form-control" name = "username" placeholder="Nhập tên đăng nhập">
                </div>
            </div>
            <div class="row mb-2">
                <label for="inputPassword3" class="col-lg-2 col-form-label">
                    <i class="fa-solid fa-lock fa-2xl" style="color: #ff0080;"></i>
                </label>
                <div class="col-lg-2 col-xl-5">
                    <input type="password" class="form-control" id="inputPassword3" name = "password" placeholder="Nhập mật khẩu">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name = "dangky" style = "margin: 5px 200px;">Đăng ký</button>
            <div style = " margin-right: 76px; font-size: 20px;">
                <a href="dangnhap.php" style = "text-decoration: none;">Bạn đã có tài khoản?</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<?php
    $connect->close();
?>

