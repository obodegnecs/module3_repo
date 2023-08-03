<?php

class Logger
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function debug()
    {
        $this->db->write("Debug text");
    }

    public function error()
    {
        $this->db->write("Error text");
    }
}
