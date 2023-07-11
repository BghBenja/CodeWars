<?php

function mineLongest($a, $b) {
    return count_chars($a.$b, 3);
}

function bestLongest($a, $b) {
    $chars = array_unique(str_split($a . $b));
    sort($chars);
    return implode('', $chars);
}

?>