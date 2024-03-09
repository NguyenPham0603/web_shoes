<?php
  include('config/config.php');
  include('functions/getMaxArray.php');
  $id="";
  $idNew="";
  $arrays='';
  $sql_getId = "SELECT *
                FROM sanpham";
  $result = $connect->query($sql_getId);

  if ($result->num_rows > 0) {
      $i=0;
      while($row = $result->fetch_assoc()) {
        $id = $row["SP_MA"];
        $arr = explode( "P", $id );
        $arrays[$i]=$arr[1];
        $i++;
      }
    
  }else {
    $id = 'SP0';
  }
 

$idNew = getMaxArray($arrays) + 1;

?>


