<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Calculator {
    /*
     * @Assert\NotBlank()
     * @Assert\Type("double")
     */
    private $firstValue;

    /*
     * @Assert\NotBlank()
     * @Assert\Type("double")
     */
    private $secondValue;

    /*
     * @Assert\NotBlank()
     * @Assert\Choice({"plus", "minus", "multiply", "divide"})
     */
    private $expression;

    public function getFirstValue()
    {
        return $this->firstValue;
    }

    public function setFirstValue($firstValue)
    {
        $this->firstValue = $firstValue;
    }

    public function getSecondValue()
    {
        return $this->secondValue;
    }

    public function setSecondValue($secondValue)
    {
        $this->secondValue = $secondValue;
    }
    public function getExpression()
    {
        return $this->expression;
    }

    public function setExpression($expression)
    {
        $this->expression = $expression;
    }

    public function evaluate() 
    {
        switch ($this->getExpression()) {
        case 'plus':
            $result = $this->getFirstValue() + $this->getSecondValue();
            break;
        case 'minus':
            $result = $this->getFirstValue() - $this->getSecondValue();
            break;
        case 'multiply':
            $result = $this->getFirstValue() * $this->getSecondValue();
            break;
        case 'divide':
            if ($this->getSecondValue() != 0) {
                $result = $this->getFirstValue() / $this->getSecondValue();
            } else {
                $result = null;
            }
            break;
        default:
            $result = null;
        }

        return $result;
    }
}
