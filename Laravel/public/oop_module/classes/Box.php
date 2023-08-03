<?php

class Box
{
    private $fruits = [];

    public function add($fruit)
    {
        if (get_parent_class($fruit) === "Fruit") {
            $this->fruits[] = $fruit;
        }
    }

    public function empty()
    {
        $this->fruits = [];
    }

    public function __toString()
    {
        if (empty($this->fruits)) {
            return "The box is empty </br>";
        } else {
            $fruits = [];
            foreach ($this->fruits as $fruit) {
                $fruits[] = get_class($fruit);
            }
            return implode(", ", $fruits) . "</br>";
        }
    }
}
