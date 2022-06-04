<?php

namespace App\classes;

class summation
{
    public $startingNumber;
    public $endingNumber;
    public $result;
    public $i;

    public function __construct($data)
    {
        $this->startingNumber   = $data['starting_number'];
        $this->endingNumber     = $data['ending_number'];
    }

    public function index()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result = $this->result + $this->i;
        }
        return $this->result;
    }

}