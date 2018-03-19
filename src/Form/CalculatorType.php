<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type;

class CalculatorType extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('firstValue', Type\TextType::class)
		    ->add('secondValue', Type\TextType::class)
            ->add('expression', Type\ChoiceType::class,
                [
                    'choices' =>
                    [
                        'Plus' => 'plus', 
                        'Minus' => 'minus', 
                        'Multiply' => 'multiply', 
                        'Divide' => 'divide'
                    ]
                ]
            )
			->add('calculate', Type\SubmitType::class);
	}
}
