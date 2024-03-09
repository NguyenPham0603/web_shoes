<?php
    session_start();
    include('../../admin/config/config.php');
    include('../../admin/functions/loginErr_Succ.php');
    
    if(isset($_POST['doimatkhau'])){
        $usr = $_POST['user'];
        $pass_new = strtoupper(bin2hex($_POST['pass_new']));
        $sql = "SELECT * FROM khachhang WHERE KH_USER = '".$usr."'";
        $result = mysqli_query($connect, $sql);
        if(isset($_SESSION['dangnhap'])){
            $pass_old = strtoupper(bin2hex($_POST['pass_old']));
            //Kiểm tra username và password đã nhập đủ chưa
            if(!$pass_old || !$pass_new){
                error("Vui lòng nhập đầy đủ mật khẩu cũ hoặc mới!", "../index.php?quanly=thaydoimk");
                exit;
            }

            //Kiểm tra username có tồn tại không
            if(mysqli_num_rows($result) == 0){
                error("Tên đăng nhập hoặc mật khẩu cũ không đúng", "../index.php?quanly=thaydoimk");
                exit;
            }
            else{
                $row = mysqli_fetch_array($result);
                if($pass_old != $row['KH_PW']){
                    error("Mật khẩu cũ không đúng vui lòng nhập lại!", "../index.php?quanly=thaydoimk");
                    exit;
                }
                else{
                    $sql_up = "UPDATE khachhang SET KH_PW = '".$pass_new."' WHERE KH_USER = '".$usr."' AND KH_PW = '".$pass_old."'";
                    $connect->query($sql_up);
                    success("Đổi Mật Khẩu Thành Công!!", "../index.php");
                }
            }
                
        }
        else{
            $email = $_POST['email'];
            //Kiểm tra username và password đã nhập đủ chưa
            if(!$usr || !$email || !$pass_new){
                error("Vui lòng nhập đầy đủ tên đăng nhập hoặc email hoặc mật khẩu mới!", "../index.php?quanly=thaydoimk");
                exit;
            }
    
            //Kiểm tra username có tồn tại không
            if(mysqli_num_rows($result) == 0){
                error("Tên đăng nhập hoặc email không đúng", "../index.php?quanly=thaydoimk");
                exit;   
            }
            else{
                $row = mysqli_fetch_array($result);
                if($email != $row['KH_EMAIL']){
                    error("Email không đúng vui lòng nhập lại!", "../index.php?quanly=thaydoimk");
                    exit;
                }
                else{
                    $sql_up_quen = "UPDATE khachhang SET KH_PW = '".$pass_new."' WHERE KH_USER = '".$usr."' AND KH_EMAIL = '".$email."'";
                    $connect->query($sql_up_quen);
                    success("Đổi Mật Khẩu Thành Công!!", "../main/dangnhap.php");
                }
            }
        }
    }
    
        
?>