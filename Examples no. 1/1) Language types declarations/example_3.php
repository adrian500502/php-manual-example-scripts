<?php

// Example #7 Old way to make arguments nullable
class C {}

function f(C $c = null) {
    var_dump($c);
}

f(new C);
f(null);