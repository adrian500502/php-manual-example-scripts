<?php

// Example #6 Using objects as default values (as of PHP 8.1.0)
class DefaultCoffeeMaker {
    public function brew() {
        return 'Making coffee.';
    }
}

class FancyCoffeeMaker {
    public function brew() {
        return 'Crafting a beautiful coffee just for you.';
    }
}

function makecoffee($coffeeMaker = new DefaultCoffeeMaker)
{
    return $coffeeMaker->brew();
}

echo makecoffee() . PHP_EOL;
echo makecoffee(new FancyCoffeeMaker);