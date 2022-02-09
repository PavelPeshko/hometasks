<?php
include_once 'Transport.php';
include_once 'IMovement.php';
include_once 'IsOverloadedTrait.php';

class Air extends Transport implements IMovement
{
    use IsOverloadedTrait;

    public $wingspan;
    public $loadcapacity;
    public $avgspeed;


    public function __construct($model, $color, $wingspan, $loadcapacity, $avgspeed)
    {
        parent::__construct($model, $color);
        $this->wingspan = $wingspan;
        $this->loadcapacity = $loadcapacity;
        $this->avgspeed = $avgspeed;
    }

    public function travel($hours, $avgspeed)
    {
        $travel = $hours * $this->avgspeed;
        return $travel;
    }

    public function newColor($newColor)
    {
        $this->color = $newColor;
        return $this->color;
    }
}