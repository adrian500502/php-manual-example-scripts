<?php

//function test(boolean $param) { }
//test(true);


// Example #3 Basic return type declaration
function sum($a, $b): float {
    return $a + $b;
}

// Note that a float will be returned.
var_dump(sum(3,7));

echo "Ala ma kota" . PHP_EOL;
echo "Ala ma kota" . "\n";

echo sum("3","11") . PHP_EOL;
var_dump(sum("3","11"));
