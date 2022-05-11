<?php

// Example #5 Using non-scalar types as default values
function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL) {
    $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
    return "Making a cup of " . join(", ", $types) . " with $device.\n";
}

echo makecoffee();
echo makecoffee(array("cappuccino", "lavazza", "espresso", "latte"), "teapot");