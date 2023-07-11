<?php

function mineNbYear($p0, $percent, $aug, $p) {
    $result = 0;
    while(true){
        $p0 = floor($p0 + ($p0 * ($percent / 100) + $aug));
        $result++;
        if($p0 >= $p){
        break;
        } 
    }
    return $result;
}

function bestNbYear($p0, $percent, $aug, $p) {
    return $p0 >= $p ? 0 : 1 + bestNbYear((int)$p0 * (1+$percent/100) + $aug, $percent, $aug, $p);   
}

?>