<?php

// Example #2 Example of typed properties
class User
{
    public int $id;
    public ?string $name;

    public function __construct(int $i, ?string $n)
    {
        $this->id = $i;
        $this->name = $n;
    }

    public function displayUser()
    {
        echo "User ID: " . $this->id . "\nUser Name: " . $this->name . "\n";
    }
}

$user = new User(3, null);
var_dump($user->id);
var_dump($user->name);

$user2 = new User(9, 'Christopher');
var_dump($user2->id);
var_dump($user2->name);
$user2->displayUser();