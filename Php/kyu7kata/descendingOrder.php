<?php

function mineDescendingOrder(int $n): int {
    $result = str_split(strval($n));
    rsort($result);
    return intval(join("",$result));
}

function bestDescendingOrder(int $n): int {
    $arrayNumber = str_split($n);
    arsort($arrayNumber);
    return (int)  implode($arrayNumber);
}

?>