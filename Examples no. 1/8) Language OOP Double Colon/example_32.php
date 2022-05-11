<?php

// Example #2 :: from inside the class definition
class MyClass
{
    const CONST_VALUE = 'A constant value';
    public const CONST_VALUE2 = "Const value 2";
}

class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon()
    {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}

$classname = 'OtherClass';
$classname::doubleColon();
OtherClass::doubleColon();