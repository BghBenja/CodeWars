<?php

function mineArrayDiff($a, $b) {
    $result = [];
    foreach($a as $num)
    {
      if(!in_array($num, $b))
      {
        array_push($result, $num);
      }
    }
    return $result;
}

function bestArrayDiff($a, $b) {
    return array_values(array_diff($a, $b));
}

?>