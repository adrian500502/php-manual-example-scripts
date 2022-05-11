<?php

// Example #15 Named argument syntax
myFunction(paramName: $value);
array_foobar(array: $value);

// NOT supported.
function_name($variableStoringParamName: $value);

//
function sample($number1, $number2) {
    return $number1 + $number2;
}

echo sample(number2: 5, number1: 20);