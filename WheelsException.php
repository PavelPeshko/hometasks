<?php

class WheelsException extends Exception
{
    public function __construct($wheels)
    {
        $this->message = "Invalid number of wheels $wheels, wheels must be from 1 to 12";
    }
}

