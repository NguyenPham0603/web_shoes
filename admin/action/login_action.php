<?php
    session_start();
    include("config/config.php");
    include("functions/loginErr_Succ.php");
    if(isset($_POST['signIn'])){
        $usr = $_POST['username'];
        $pass = strtoupper(bin2hex($_POST['password']));
        
        //Kiểm tra username và password đã nhập đủ chưa
        if(!$usr || !$pass){
            error("Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu!", "login.php");
            exit;
        }

        $sql = "SELECT * FROM admin WHERE USRN = '".$usr."'";
        $result = mysqli_query($connect, $sql);

        //Kiểm tra username có tồn tại không
        if(mysqli_num_rows($result) == 0){
            error("Tên đăng nhập hoặc mật khẩu không đúng", "login.php");
            exit;
        }
        else{
            $row = mysqli_fetch_array($result);
            if($pass != $row['PW']){
                error("Mật khẩu không đúng vui lòng nhập lại!", "login.php");
                exit;
            }
            else{
                
                $_SESSION['username'] = $usr;
                $_SESSION['name'] = $row['name'];
                success("Đăng nhập thành công", "ad_index.php?act=quanlydonhang");
            }
            
        }
        
    }

?>