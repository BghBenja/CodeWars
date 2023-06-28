<?php

function mineIsSquare($n){
    if ($n < 0){
      return false;
    }
    $sqrt = intval(sqrt($n));
    echo $sqrt;
    return $sqrt**2 == $n; // fix me
}

function bestIsSquare($n) {
    return !fmod(sqrt($n), 1);
}

?>