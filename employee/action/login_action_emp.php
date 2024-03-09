<?php
    session_start();
    include("../admin/config/config.php");
    include("../admin/functions/loginErr_Succ.php");
    if(isset($_POST['signIn_emp'])){
        $usr = $_POST['username_emp'];
        $pass = strtoupper(bin2hex($_POST['password_emp']));
        
        //Kiểm tra username và password đã nhập đủ chưa
        if(!$usr || !$pass){
            error("Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu!", "login_employee.php");
            exit;
        }

        $sql = "SELECT * FROM nhanvien WHERE NV_USER = '".$usr."'";
        $result = mysqli_query($connect, $sql);

        //Kiểm tra username có tồn tại không
        if(mysqli_num_rows($result) == 0){
            error("Tên đăng nhập hoặc mật khẩu không đúng", "login_employee.php");
            exit;
        }
        else{
            $row = mysqli_fetch_array($result);
            if($pass != $row['NV_PW']){
                // echo $row['NV_PW'].' - ';
                // echo $pass;
                error("Mật khẩu không đúng vui lòng nhập lại!", "login_employee.php");
                exit;
                // echo '<a href="../">quay ve</a>';
            }
            else{
                $_SESSION['username_emp'] = $usr;
                $_SESSION['name_emp'] = $row['NV_HOTEN'];
                $_SESSION['code_emp'] = $row['NV_MA'];
                success("Đăng nhập thành công", "index_emp.php?act=donhang");
            }
            
        }
        
    }

?>