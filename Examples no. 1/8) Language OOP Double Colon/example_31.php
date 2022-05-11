<?php

// Example #1 :: from outside the class definition
class MyClass
{
    const CONST_VALUE = 'A constant value';
    public const CONST_VALUE2 = "Const value 2";
}

$classname = 'MyClass';
echo MyClass::CONST_VALUE . PHP_EOL;
echo $classname::CONST_VALUE . PHP_EOL;

$name2 = 'MyClass';
echo MyClass::CONST_VALUE2 . PHP_EOL;
echo $name2::CONST_VALUE2 . PHP_EOL;

