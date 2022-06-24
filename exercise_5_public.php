<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/
include_once __DIR__ . '/classes/Beverage.class.php';

//The other way hurts me! - There is only one way
$cola = new Beverage('black', 2);
echo $cola->getInfo();
echo '<br/>';
echo '<br/>';
$cola->setPrice(3.5);
echo $cola->getPrice();
