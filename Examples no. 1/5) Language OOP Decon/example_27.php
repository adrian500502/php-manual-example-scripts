<?php

// Example #3 Using constructor property promotion
class Point
{
    public function __construct(protected int $x, protected int $y = 0)
    {

    }
}
