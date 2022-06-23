<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/
include_once __DIR__ . '/classes/Beverage.class.php';
$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);
//The other way hurts me! - There is only one way
print_r('AlcoholPercentage: ' . $duvel->getAlcoholPercentage() . "%");
echo '<br/>';
print_r('color: ' . $duvel->getColor());
echo '<br/>';
print_r(
    'Info:' . $duvel->getInfo()
);
echo '<br/>';
echo '<br/>';
$duvel->setColor('light');
print_r($duvel->getColor());
echo '<br/>';
echo '<br/>';
print_r($duvel->beerInfo());
