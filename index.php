<?php
include_once 'Transport.php';
include_once 'Sea.php';
include_once 'Ground.php';
include_once 'Air.php';
include_once 'IMovement.php';
include_once 'IsOverloadedTrait.php';
include_once 'WheelsException.php';

$ship = new Sea('RR', 'White', 50, true, 80);
print_r($ship);

$hours = 6;
$km = $ship->travel($hours, $ship->avgspeed);
echo $km . ' kilometers' . '<br>';

$plane = new Air('Boing', 'Gray', 10, 1000, 200);
//print_r($plane);
$hours1 = 2;
$km1 = $plane->travel($hours1, $plane->avgspeed);
echo $km1 . ' kilometers' . '<br>';

$weigth = 500;
$rz = $plane->isOver($plane->loadcapacity, $weigth);
echo $rz . '<br>';

try {
    $car = new Ground('BMW', 'Blue', 300, 2, 140);
    print_r($car);
} catch (WheelsException $ex) {
    echo $ex->getMessage();
}
$newColor = 'Gray';
$nn = $ship->newColor($newColor);
echo '<br>' . $nn;

