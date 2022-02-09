<?php

trait IsOverloadedTrait
{
    public function isOver($loadcapacity, $weigth)
    {
        if ($loadcapacity > $weigth)
            return ($loadcapacity - $weigth) . ' Kilogram free';
        else if ($loadcapacity < $weigth)
            return 'Overloaded on ' . abs($loadcapacity - $weigth) . ' Kilogram';
        else if ($loadcapacity == $weigth)
            return 'All is good';
    }
}
