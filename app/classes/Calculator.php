<?php

namespace App\classes;
class Calculator
{
    public $firstNumber;
    public $secondNumber;
    public $operator;
    public $result;

    public function __construct($data)
    {
        $this->firstNumber  = $data['first_number'];
        $this->secondNumber = $data['second_number'];
        $this->operator     = $data['operator'];
    }

    public function index()
    {
        switch ($this->operator)
        {
            case '+':
                $this->result = $this->addition();
                break;
            case '-':
                $this->result = $this->subtraction();
                break;
            case '*':
                $this->result = $this->multiplication();
                break;
            case '/':
                $this->result = $this->division();
                break;
            case '%':
                $this->result = $this->remainder();
                break;
        }
        return $this->result;
    }

    public function addition()
    {
        return $this->firstNumber + $this->secondNumber;
    }

    public function subtraction()
    {
        return $this->firstNumber - $this->secondNumber;
    }

    public function multiplication()
    {
        return $this->firstNumber * $this->secondNumber;
    }

    public function division()
    {
        return $this->firstNumber / $this->secondNumber;
    }

    public function remainder()
    {
        return $this->firstNumber % $this->secondNumber;
    }
}