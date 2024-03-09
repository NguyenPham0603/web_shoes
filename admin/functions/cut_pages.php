<?php 
    // function cut_page(){
        if(isset($_GET['trang'])){
            $page = $_GET['trang'];
        }
        else{
            $page = 1;
        }
        if($page == '' || $page == 1){
            $begin = 0;
        }
        else{
            $begin = ($page*10) - 10;
        }
        $start = $begin;
?>