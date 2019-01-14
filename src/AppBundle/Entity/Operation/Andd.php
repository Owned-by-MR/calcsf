<?php

namespace AppBundle\Entity\Operation;



class Andd implements OperationInterface
{
    public function runCalculation($firstNumber, $secondNumber)
    {  // echo 'Bitwise result is: ';
        $a=print_r($firstNumber & $secondNumber, TRUE);
        return $a;
    }
}