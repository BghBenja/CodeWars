<?php

function mineCreatePhoneNumber($numbersArray) {
    return vsprintf('(%s%s%s) %s%s%s-%s%s%s%s', $numbersArray);
}

function bestCreatePhoneNumber(array $digits): string {
    return sprintf("(%d%d%d) %d%d%d-%d%d%d%d", ...$digits);
}

?>