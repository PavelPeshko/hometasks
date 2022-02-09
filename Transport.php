<?php

abstract class Transport
{
    protected $model;
    protected $color;

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    abstract public function newColor($newColor);
}