<?php  
    include('../config/config.php');
    $malsp = $_POST['malsp'];
    $tenlsp = $_POST['tenlsp'];
    
    $sql_themlsp = "INSERT INTO loai_sp(LSP_MA, LSP_TEN) VALUES('".$malsp."','".$tenlsp."')";
    if(mysqli_query($connect, $sql_themlsp)){
        echo '<script>
                alert ("Thêm Loại Sản Phẩm Thành Công");
                window.location ="../ad_index.php?act=quanlyloaisanpham";       
             </script>';
    }else{
        echo '<script>
                alert ("Thêm Loại Sản Phẩm Không Thành Công");
                window.location ="../ad_index.php?act=quanlyloaisanpham";       
             </script>';
   }

   
?>