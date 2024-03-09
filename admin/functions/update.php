<?php
function update_condition($tb_name, $col_name, $condition, $connect, $link1, $link2) {
    $sql_sua = "UPDATE ".$tb_name." SET ".$col_name;
    if($connect->query($sql_sua) === TRUE){
        echo '<script>
                alert ("Chỉnh Sửa Thành Công");
                window.location ="'.$link1.'";       
             </script>';        

    } else{
        echo '<script>
                alert ("Chỉnh Sửa Không Thành Công");
                 window.location ="'.$link2.'";       
             </script>';    
        echo 'khong thanh cong';
    } 
}


function update_execute($connect, $sql_sua, $link1, $link2, $success, $error) {
    
    if($connect->query($sql_sua) === TRUE){
        echo '<script>
                alert ("'.$success.'");
                window.location ="'.$link1.'";       
             </script>';        

    } else{
        echo '<script>
                alert ("'.$error.'");
                 window.location ="'.$link2.'";       
             </script>';    
    
        echo 'khong thanh cong';
    } 
}


 






?>