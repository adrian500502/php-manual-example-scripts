<?php

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who(); // Here comes Late Static Bindings
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}
//A::who();  // shows 'A'
//A::test();  // shows 'A'
//B::who();  // shows 'B'

B::test();  // shows 'B'