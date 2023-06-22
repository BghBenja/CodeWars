<?php

function mine_even_or_odd(int $n): string {
    if ($n%2==0){
        return "Even";
    }
    return "Odd";
}

function best_even_or_odd(int $n): string {
    return $n % 2 ? "Odd" : "Even";
}

?>