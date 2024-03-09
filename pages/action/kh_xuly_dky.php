<?php
    session_start();
    include('../../admin/config/config.php');
    if(isset($_POST['dangky'])){
        $id = $_POST['makh'];
        $hoten = $_POST['hoten'];
        $nsinh = $_POST['ngaysinh'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $dchi = $_POST['dchi'];
        $usr = $_POST['username'];
        $pass = strtoupper(bin2hex($_POST['password']));

        $sql = "INSERT INTO khachhang(KH_MA, KH_HOTEN, KH_NGSINH, KH_SDT, KH_EMAIL, KH_DCHI, KH_USER, KH_PW)
                VALUES ('".$id."', '".$hoten."', '".$nsinh."', '".$sdt."', '".$email."', '".$dchi."', '".$usr."', '".$pass."')";
         if(mysqli_query($connect, $sql)){
            $_SESSION['dangky'] = $usr;
            $_SESSION['id_kh'] = $id;
            header('Location: ../main/dangnhap.php');
        }

    }
?>
