<?php

// Example #3 Accessing properties
class Shape
{
    public int $numberOfSides;
    public string $name;

    public function setNumberOfSides(int $nos): void
    {
        $this->numberOfSides = $nos;
    }

    public function setName(string $n): void
    {
        $this->name = $n;
    }

    public function getNumberOfSides(): int
    {
        return $this->numberOfSides;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$triangle = new Shape();
$triangle->setName("triangle");
$triangle->setNumberOfSides(3);
var_dump($triangle->getName());
var_dump($triangle->getNumberOfSides());

$circle = new Shape();
$circle->setName("circle");
var_dump($circle->getName());
var_dump($circle->getNumberOfSides());