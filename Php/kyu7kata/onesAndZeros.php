<?php

function mineBinaryArrayToNumber($arr) {
    $result = 0;
    for ($i = 0; $i < count($arr); $i++){
        $pos = count($arr) - 1 - $i;
        if($arr[$pos] == 1){
        $result += pow(2,$i);
        }
    }
    return $result;
}

function bestBinaryArrayToNumber(array $arr): int {
    return bindec(implode('', $arr));
}

?>