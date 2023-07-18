<?php

function mine_digital_root($number): int
{
  $digits = strval($number);
  $count = 0;
  for ($i = 0; $i < strlen($digits); $i++)
  {
    $count += intval($digits[$i]);
  }
  if ($count > 9)
  {
    return mine_digital_root($count);
  }
  return $count;
}

function best_digital_root($number): int
{
    while(strlen($number) > 1) {
        $number = array_sum(str_split($number));
    }
    return $number;
}

function clever_digital_root($n): int {
    return 1 + ($n - 1) % 9;
  }

?>