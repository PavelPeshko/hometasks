<?php
include_once 'Transport.php';
include_once 'IMovement.php';

class Sea extends Transport implements IMovement
{
    public $length;
    private $anchor;
    public $avgspeed;


    public function getAnchor()
    {
        return $this->anchor;
    }

    public function setAnchor($anchor)
    {
        $this->anchor = $anchor;
    }


    public function __construct($model, $color, $length, $anchor, $avgspeed)
    {
        parent::__construct($model, $color);
        $this->length = $length;
        $this->anchor = $anchor;
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