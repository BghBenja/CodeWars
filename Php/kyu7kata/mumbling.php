<?php

function mineAccum($s) {
    $result = array();
    $chars = str_split(strtolower($s));
    for ($i = 0; $i < strlen($s); $i++){
        array_push($result, strtoupper($chars[$i]) . str_repeat($chars[$i], $i));
    }
    return join("-", $result);
}

function bestAccum($s) {
    $parts = [];
    
    foreach (str_split($s) as $index => $part) {
      $parts[] = strtoupper($part) . str_repeat(strtolower($part), $index);
    }
    
    return implode('-', $parts);
}

?>