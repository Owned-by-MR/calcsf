<?php

namespace AppBundle\Entity\Operation;



class Orr implements OperationInterface
{
    public function runCalculation($firstNumber, $secondNumber)
    {
        $a = print_r($firstNumber | $secondNumber, TRUE);
        return $a;
    }
}
