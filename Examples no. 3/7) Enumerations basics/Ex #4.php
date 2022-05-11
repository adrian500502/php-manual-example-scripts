<?php
//print Suit::Spades->name;
//// prints "Spades"

/////////////

enum Colors
{
    case Red;
    case Blue;
    case Green;

    public function getColor(): string
    {
        return $this->name;
    }
}

function paintColor(Colors $colors): void
{
    echo "Paint : " . $colors->getColor() . PHP_EOL;
}

paintColor(Colors::Red);
paintColor(Colors::Green);
paintColor(Colors::Blue);

/*
    output :
    ------------------------
    Paint : Red
    Paint : Green
    Paint : Blue
*/