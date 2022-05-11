<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new MyClass1();  // works
$obj2 = new MyClass2();  // works
$obj3 = new MyClass3();  // does not work "No such file or directory"
