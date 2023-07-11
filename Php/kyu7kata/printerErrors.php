<?php

function minePrinterError($s) {
    $error = 0;
    foreach( str_split($s) as $c){
        if (ord($c) > 109){
        $error++;
        }
    }
    return $error . "/" . strlen($s);
}

function bestPrinterError($s) {
    return strlen(preg_replace('/[a-m]/i', '', $s)) . '/' . strlen($s);
}

?>