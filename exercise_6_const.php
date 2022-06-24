<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/
include_once __DIR__ . '/classes/Beverage.class.php';
define('BARNAME','Het Vervolg');
print_r(BARNAME);
$cola = new Beverage('black', 2);
echo '<br/>';
echo '<br/>';
print_r($cola->getBar());
$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);
echo '<br/>';
echo '<br/>';
print_r($duvel->getBar());
