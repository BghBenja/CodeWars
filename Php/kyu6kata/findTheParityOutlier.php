<?php

function mineFind($integers) {
    $odds = [];
    $evens = [];
    foreach ($integers as $num)
    {
      if($num % 2 == 0)
      {
        array_push($evens, $num);
      } else {
        array_push($odds, $num);
      }
    }
    return (count($evens) > count($odds)) ? $odds[0] : $evens[0];
}

function bestFind($a) {
    $odds = [];
    $evens = [];
    foreach ($a as $n) {
      if ($n % 2) array_push($odds, $n);
      else array_push($evens, $n);
    }
    return count($evens) === 1 ? $evens[0] : $odds[0];
}

?>