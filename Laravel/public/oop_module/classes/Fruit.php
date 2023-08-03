<?php

class Fruit
{
    private $size = 0;
    private $colour = "";
    private $calorie = 0;

    public function getCalorie()
    {
        return $this->calorie;
    }

    public function getColour()
    {
        return $this->colour;
    }

    public function getSize()
    {
        return $this->size;
    }
}
