<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Calculator;
use App\Form\CalculatorType;

class CalculatorController extends Controller {

    /**
     * @Route("/calculator")
     */
    public function calculate(Request $request) {
        $calculator = new Calculator();
        $form = $this->createForm(CalculatorType::class, $calculator);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calculate = $form->getData();
            $result = $calculat->evaluate();

        } else if ($form->isSubmitted() && !$form->isValid()) {
            // return error
        }

        return $this->render('Calculator/Calculator.html.twig',
            [
                'form' => $form->createView(),
                'result' => isset($result) ? $result : null
            ]);
    }

}
