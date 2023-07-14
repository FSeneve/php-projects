<?php

# 1- We want to count the list of adult and children
# 2- We want to create a new list of Ideal Job candidate between 22 and 30.

$people = [
    ['name' => 'Francis', 'age' => 29],
    ['name' => 'Silas', 'age' => 24],
    ['name' => 'Blaise', 'age' => 19],
    ['name' => 'Rita', 'age' => 15],
    ['name' => 'Minda', 'age' => 28],
    ['name' => 'Belvina', 'age' => 17],
    ['name' => 'Makita Lucresse', 'age' => 27],
    ['name' => 'Jordy', 'age' => 22],
    ['name' => 'Eric', 'age' => 10]
];

$children = 0;
$adult = 0;
$peopleAdult = [];

//echo count($people);

foreach ($people as $person) {
    $age = $person['age'];
    if ($age >= 18) {
        $adult++;
        if ($age >= 22 && $age <= 30) {
            $peopleAdult[] = $person['name'];
        }
    } else {
        $children++;
    }
}

echo "{$children} number(s) of children in the list" . "<br>";
echo "{$adult} number(s) of adult in the list" . "<br>";
echo "<pre>";
print_r($peopleAdult);
echo "</pre>";
