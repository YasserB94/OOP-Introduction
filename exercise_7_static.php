<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/
include_once __DIR__ . '/classes/Beverage.class.php';
$cola = new Beverage('black', 2);

print_r($cola::$ADDRESS);
echo '<br/>';
echo '<br/>';
print_r($cola->getAddress());