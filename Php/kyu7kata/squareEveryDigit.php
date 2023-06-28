<?php

function mine_square_digits($num): int {
    $digits = str_split(strval($num));
    $result = array();
    foreach ($digits as $digit) {
      array_push($result,strval(intval($digit) ** 2));
    }
    return intval(join('', $result));
}

function best_square_digits($num){
    return implode(array_map(function($n){
      return $n*$n;
    },str_split($num)))+0;
}

?>