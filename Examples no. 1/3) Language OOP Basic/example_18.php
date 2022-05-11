<?php

// Example #8 Property access vs. method call
class Foo
{
    public $bar = 'property';

    public function bar()
    {
        return 'method';
    }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;