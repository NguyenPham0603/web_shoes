<?php
function getMaxArray($array){
    $max = null;
    $position = null;
    for ($i = 0; $i < count($array); $i++){
      if ($max == null){
          $max = $array[$i];
          $position = $i;
      }
      else {
          if ($array[$i] > $max){
              $max = $array[$i];
              $position = $i;
          }
      }
    }
    return $max;
  }

?>