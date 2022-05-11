<?php

// Example #9 Coercive typing for argument values
function sum(int $a, int $b) {
    return $a + $b;
}

function sum_2(float $a, float $b) {
    return $a + $b;
}

var_dump(sum(1,2));

// These will be coerced to integers: note the output below!
var_dump(sum(1.7, 2.7));

var_dump(sum_2(1,5));