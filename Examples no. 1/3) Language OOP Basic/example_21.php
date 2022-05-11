<?php

// Example #12 Fatal error when a child method removes a parameter
class Base
{
    public function foo(int $a = 5)
    {
        echo "Valid\n";
    }
}

class Extend extends Base
{
    function foo()
    {
        parent::foo(1);
    }
}

// Output of the above example in PHP 8 is similar to:
//Fatal error: Declaration of Extend::foo() must be compatible with Base::foo(int $a = 5) in /in/evtlq on line 13