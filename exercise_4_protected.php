<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

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