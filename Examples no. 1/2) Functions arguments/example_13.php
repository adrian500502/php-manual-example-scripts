<?php

// Example #11 Using ... to access variable arguments
function sum(...$numbers)
{
    $acc = 0;
    foreach ($numbers as $n)
    {
        $acc = $acc + $n;
    }

    return $acc;
}

echo sum(1, 2, 3, 4, 5, 2.5);