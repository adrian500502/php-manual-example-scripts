<?php
enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}



$a = Suit::Spades;
$b = Suit::Spades;

echo $a === $b; // true

echo $a instanceof Suit;  // true

echo $a == $b; // true

echo $b->name;