<?php
  include('../../admin/config/config.php');
  include('../../admin/functions/getMaxArray.php');
  $id="";
  $idNew="";
  $arrays='';
  $sql_getId = "SELECT *
                FROM khachhang";
  $result = $connect->query($sql_getId);

  if ($result->num_rows > 0) {
    // output data of each row
    $i=0;
    while($row = $result->fetch_assoc()) {
        $id = $row["KH_MA"];
        $arr = explode( "H", $id );
        $arrays[$i]=$arr[1];
        $i++;
    }
  } else {
    //echo "0 results";
    $id = 'KH0';
  }
  $idNew = getMaxArray($arrays) + 1;
?>

