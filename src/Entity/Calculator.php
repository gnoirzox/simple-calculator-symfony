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
     * @Assert\Choice({"plus", "minus", "multiply", "divide "})
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

    public static function evaluate(Calculator $calculation) 
    {
        switch ($calculation->getExpression()) {
        case 'plus':
            $result = $calculation->getFirstValue() + $calculation->getSecondValue();
            break;
        case 'minus':
            $result = $calculation->getFirstValue() - $calculation->getSecondValue();
            break;
        case 'multiply':
            $result = $calculation->getFirstValue() * $calculation->getSecondValue();
            break;
        case 'divide':
            if ($calculation->getSecondValue() != 0) {
                $result = $calculation->getFirstValue() / $calculation->getSecondValue();
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
