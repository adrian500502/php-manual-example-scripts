<?php

include_once 'example_15.php';

// Example #3 Creating an instance
$instance = new SimpleClass();

// This can also be done with a variable:
$className = 'SimpleClass';
$instance = new $className();  // new SimpleClass()