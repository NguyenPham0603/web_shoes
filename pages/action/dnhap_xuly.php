<?php
    session_start();
    include('../../admin/config/config.php');
    include('../../admin/functions/loginErr_Succ.php');
    
    if(isset($_POST['dangnhap'])){
        $usr = $_POST['user'];
        $pass = strtoupper(bin2hex($_POST['pass']));
        
        //Kiểm tra username và password đã nhập đủ chưa
        if(!$usr || !$pass){
            error("Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu!", "../main/dangnhap.php");
            exit;
        }

        $sql = "SELECT * FROM khachhang WHERE KH_USER = '".$usr."'";
        $result = mysqli_query($connect, $sql);

        //Kiểm tra username có tồn tại không
        if(mysqli_num_rows($result) == 0){
            error("Tên đăng nhập hoặc mật khẩu không đúng", "../main/dangnhap.php");
            exit;
        }
        else{
            $row = mysqli_fetch_array($result);
            if($pass != $row['KH_PW']){
                error("Mật khẩu không đúng vui lòng nhập lại!", "../main/dangnhap.php");
                exit;
            }
            else{
                $_SESSION['dangnhap'] = $usr;
                $_SESSION['name'] = $row['KH_HOTEN'];
                $_SESSION['id_kh'] = $row['KH_MA'];
                success("Đăng nhập thành công!!", "../index.php");
            }
            
        }
        
    }
?>