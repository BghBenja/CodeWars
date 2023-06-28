<?php

function mineHighAndLow($numbers)
{
  $nums = explode(" ", $numbers);
  $min = intval($nums[0]);
  $max = intval($nums[0]);
  
  foreach ($nums as $num) {
    if (intval($num) < $min) {
      $min = intval($num);
    }
    
    if (intval($num) > $max) {
      $max = intval($num);
    }
  }
  return sprintf("%d %d",$max,$min);
}

function bestHighAndLow($numbers) {
    $a = explode(' ', $numbers);
    return max($a) . " " . min($a);
}

?>