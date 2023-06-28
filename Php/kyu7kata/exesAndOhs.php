<?php

function XO($s) {
    $s = strtolower($s);
    return substr_count($s, 'o') == substr_count($s, 'x');
}

?>