<?php

class Singleton
{
    public function __clone()
    {
        die("I'm not allowed to be cloned");
    }
}
