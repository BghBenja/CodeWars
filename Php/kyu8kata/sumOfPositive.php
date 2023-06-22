<?php

function mine_positive_sum($arr) {
    $total = 0;

    foreach($arr as $value){
        if($value > 0) {
        $total += $value;
        }
    }
    return $total;
}

function best_positive_sum($a) {
    return array_sum(array_filter($a, function ($n) {return $n > 0;}));
}

?>