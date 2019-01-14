<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Operation\Add;
use AppBundle\Entity\Operation\Divide;
use AppBundle\Entity\Operation\Multiply;
use AppBundle\Entity\Operation\Subtract;
use AppBundle\Entity\Operation\Andd;
use AppBundle\Entity\Operation\Orr;

use Symfony\Component\Validator\Constraints as Assert;

class Calculator
{
    /**
     * @Assert\Type("integer")
     */
    public $firstNumber;

    /**
     * @Assert\Type("integer")
     * @Assert\NotEqualTo("")
     */
    public $secondNumber;

    /**
     * @Assert\Choice({"add", "subtract", "multiply", "divide", "andd", "orr"})
     */
    public $operand;

    /**
     * @return integer
     */
    public function getFirstNumber()
    {
        return $this->firstNumber;
    }

    /**
     * @param integer $firstNumber
     */
    public function setFirstNumber($firstNumber)
    {
        $this->firstNumber = $firstNumber;
    }

    /**
     * @return integer
     */
    public function getSecondNumber()
    {
        return $this->secondNumber;
    }

    /**
     * @param integer $secondNumber
     */
    public function setSecondNumber($secondNumber)
    {
        $this->secondNumber = $secondNumber;
    }

    /**
     * @return integer
     */
    public function getOperand()
    {
        return $this->operand;
    }

    /**
     * @param integer $operand
     */
    public function setOperand($operand)
    {
        $this->operand = $operand;
    }

    public function performCalculation()
    {
        switch ($this->getOperand())
        {
            case "add":
                $operation = new Add();
                break;
            case "subtract":
                $operation = new Subtract();
                break;
            case "multiply":
                $operation = new Multiply();
                break;
            case "divide":
                $operation = new Divide();
                break;
            case "andd":
                $operation = new Andd();
                break;
            case "orr":
                $operation = new Orr();
                break;
        }

        return $operation->runCalculation($this->getFirstNumber(), $this->getSecondNumber());
    }
}