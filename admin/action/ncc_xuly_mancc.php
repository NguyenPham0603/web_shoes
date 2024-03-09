<?php
  include('config/config.php');
  $id="";
  $idNew="";
  $sql_getId = "SELECT *
                FROM nhacungcap
                ORDER BY NCC_MA DESC
                LIMIT 1";
  $result = $connect->query($sql_getId);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $id=  $row["NCC_MA"];
    }
  } else {
    //echo "0 results";
    $id = 'NCC0';
  }

  $arr = explode( "C", $id );

  $idNew= $arr[2]+1;
?>