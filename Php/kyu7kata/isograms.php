<?php

function mineIsIsogram($string) {
    if ($string) {
        $set = array_unique(str_split(strtolower($string)));
        return count($set) === strlen($string);
    }
    return true;
}

function bestIsIsogram($string) {
    if (empty($string)){
        return true;
    }

    $array = str_split(strtolower($string));
    return (count($array) === count(array_unique($array)));
}

?>