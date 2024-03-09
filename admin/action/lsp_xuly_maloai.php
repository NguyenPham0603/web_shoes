<?php
  include('config/config.php');
  $id="";
  $idNew="";
  $sql_getId = "SELECT *
                FROM loai_sp
                ORDER BY LSP_MA DESC
                LIMIT 1";
  $result = $connect->query($sql_getId);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $id=  $row["LSP_MA"];
    }
  } else {
    //echo "0 results";
    $id = 'LSP0';
  }

  $arr = explode( "P", $id );

  $idNew= $arr[1]+1; 
  //$connect->close();
?>