<?php

function printerError($s) {
    $error = 0;
    foreach( str_split($s) as $c){
        if (ord($c) > 109){
        $error++;
        }
    }
    return $error . "/" . strlen($s);
}

?>