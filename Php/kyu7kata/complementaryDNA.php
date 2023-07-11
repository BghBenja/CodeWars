<?php

function mine_DNA_strand($dna) {
    $result = '';
    foreach(str_split($dna) as $c){
        switch ($c) {
            case 'A':
            $result = $result . 'T';
            break;
            case 'T':
            $result = $result . 'A';
            break;
            case 'C':
            $result = $result . 'G';
            break;
            case 'G':
            $result = $result . 'C';
            break;
        }
    }
    return $result;
}

function best_DNA_strand($dna) {
    return strtr($dna, 'ACGT', 'TGCA');
}

?>