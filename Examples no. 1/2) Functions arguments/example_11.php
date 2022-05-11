<?php

// Example #7 Incorrect usage of default function arguments
function makeyogurt($container = "bowl", $flavour)
{
    return "Making a $container of $flavour yogurt.\n";
}

echo makeyogurt("raspberry"); // "raspberry" is $container, not $flavour