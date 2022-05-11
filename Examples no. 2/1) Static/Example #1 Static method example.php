<?php

class Foo
{
    public static function aStaticMethod()
    {
        echo "Anything" . PHP_EOL;
    }
}

Foo::aStaticMethod();
$classname = 'Foo';
$classname::aStaticMethod();