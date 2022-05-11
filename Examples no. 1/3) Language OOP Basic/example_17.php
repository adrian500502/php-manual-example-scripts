<?php

include_once 'example_15.php';

// Example #5 Object Assignment
$instance = new SimpleClass();

$assigned = $instance;
$reference = &$instance;

$instance->var = '$assigned will have this value';

$instance = null;  // $instance and $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);

