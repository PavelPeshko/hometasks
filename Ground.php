<?php
include_once 'Transport.php';
include_once 'IMovement.php';
include_once 'WheelsException.php';

class Ground extends Transport implements IMovement
{
    private $power;
    public $wheels;
    public $avgspeed;

    public function getPower()
    {
        return $this->power;
    }

    public function setPower($power)
    {
        $this->power = $power;
    }


    public function __construct($model, $color, $power, $wheels, $avgspeed)
    {
        parent::__construct($model, $color);
        $this->power = $power;
        if ($wheels < 1 || $wheels > 12) {
            throw new WheelsException($wheels);
        }
        $this->wheels = $wheels;
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