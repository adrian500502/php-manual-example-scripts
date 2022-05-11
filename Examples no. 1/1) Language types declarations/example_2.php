<?php

// Example #5 Nullable argument type declaration
class C {}

function f(?C $c) {
    var_dump($c);
}

f(new C);
f(null);