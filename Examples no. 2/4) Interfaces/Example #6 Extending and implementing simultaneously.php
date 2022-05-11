<?php

class One
{
    //public function anything() {}
    /* ... */
}

interface Usable
{
    //public function foo();
    /* ... */
}

interface Updatable
{
    //public function bar();
    /* ... */
}

// The keyword order here is important. 'extends' must come first.
class Two extends One implements Usable, Updatable
{
//    public function foo()
//    {
//        // TODO: Implement foo() method.
//    }
//
//    public function bar()
//    {
//        // TODO: Implement bar() method.
//    }
    /* ... */
}