<?php

// Example #4 Use of default parameters in functions
function makecoffee($type = "cappuccino") {
    return "Making a coffee of $type.\n";
}

echo makecoffee();
echo makecoffee(null);
echo makecoffee("latte");
echo makecoffee("espresso");