<?php

namespace App\classes;

class Even_odd
{
    public $startingNumber;
    public $endingNumber;
    public $operator;
    public $result;
    public $i;
    public function __construct($data)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data['ending_number'];
        $this->operator     = $data['operator'];
    }

    public function index()
    {
        if ($this->operator == "even"){
          return $this->getEven();
        }
        elseif ($this->operator == "odd"){
           return $this->getOdd();
        }
    }


    public function getEven(){

        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
            if($this->i % 2 == 0){
                $this->result .= $this->i . ' ';
            }
        }
        return $this->result;
    }
    public function getOdd(){

        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
           if($this->i % 2 == 1){
               $this->result .= $this->i . ' ';
           }
        }
        return $this->result;
    }


}




