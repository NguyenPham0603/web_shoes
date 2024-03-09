<?php
  include('../../admin/config/config.php');
  $id="";
  $idNew="";
  $sql_getId = "SELECT *
                FROM hoadon
                ORDER BY HD_MA DESC
                LIMIT 1";
  $result = $connect->query($sql_getId);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $id=  $row["HD_MA"];
    }
  } else {
    //echo "0 results";
    $id = 'HD0';
  }

  $arr = explode( "D", $id );

  $idNew= $arr[1]+1; 
  // $connect->close();
?>