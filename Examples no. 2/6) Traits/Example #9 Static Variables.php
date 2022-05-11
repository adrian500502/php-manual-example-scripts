<?php

trait Counter {
    public function inc() {
        static $c = 0;
        $c = $c + 1;
        echo "$c\n";
    }
}

class C1 {
    use Counter;
}

class C2 {
    use Counter;
}

$o = new C1(); $o->inc(); // echo 1
$o = new C1(); $o->inc(); // echo 2
$o = new C1(); $o->inc(); // echo 3

$p = new C2(); $p->inc(); // echo 1