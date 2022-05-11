<?php

// Example #10 Strict typing for return values
declare(strict_types=1);

function sum($a, $b): int {
    return $a + $b;
}

var_dump(sum(1,5));
var_dump(sum(1,2.5));