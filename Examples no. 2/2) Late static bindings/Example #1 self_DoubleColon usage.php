<?php

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

//A::who();  // shows the class name
//A::test();  // refers to its public static function and also shows the class name
//B::who();  // shows 'B'

//B::test();  // outputs 'A'