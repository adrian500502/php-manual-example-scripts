<?php

// The best way to understand what traits are and how to
// use them is to look at them for what they essentially
// are:  language assisted copy and paste.
//
// If you can copy and paste the code from one class to
// another (and we've all done this, even though we try
// not to because its code duplication) then you have a
// candidate for a trait.

trait ezcReflectionReturnInfo {
    function getReturnType() { /*1*/ }
    function getReturnDescription() { /*2*/ }
}

class ezcReflectionMethod extends ReflectionMethod {
    use ezcReflectionReturnInfo;
    /* ... */
}

class ezcReflectionFunction extends ReflectionFunction {
    use ezcReflectionReturnInfo;
    /* ... */
}