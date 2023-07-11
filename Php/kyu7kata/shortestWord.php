<?php

function mienFindShort($str){
    $words = explode(" ", $str);
    $min = strlen($words[0]);
    foreach ($words as $word) {
        if (strlen($word) < $min)
            $min = strlen($word);
    }
    return $min;
}

function bestFindShort($str){
    return min(array_map('strlen', (explode(' ', $str))));
}

?>