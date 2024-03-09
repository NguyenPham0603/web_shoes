<?php
    function list_page($tbl, $link, $connect){
        include('cut_pages.php');
        $sql_pages = mysqli_query($connect, "SELECT * FROM $tbl");
        $row_count = mysqli_num_rows($sql_pages);
        $pages = ceil($row_count/10);
        
        for($i=1; $i<=$pages; $i++){

   ?>
        <button <?php if($i == $page){
                    echo 'style = "background: rgb(154, 229, 246);border-radius: 13px; font-size: 20px;"';
                }else{
                    echo 'style = "border-radius: 13px;"';
                }?>>
            <a <?php if($i == $page){ 
                        echo 'style = "color: red; font-weight: bold;"'; 
                    }else{
                        echo 'style = "font-size: 20px;"';
                    } ?> href="<?php echo $link.''.$i; ?>">
                <?php echo $i; ?>
            </a>
        </button>
 <?php  
        }
    }
?>