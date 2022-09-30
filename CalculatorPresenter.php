<?php

class CalculatorPresenter implements CalculatorPresenterInterface
{
    public Calculator $calc;
    public CalculatorView $view;

    public function onPlusClicked(): void
    {
        $this->calc->sum((float)$this->view->getFirstArgumentAsString(), (float)$this->view->getSecondArgumentAsString());
    }

    public function onMinusClicked(): void
    {

    }

    public function onMultiplyClicked(): void
    {

    }

    public function onDivideClicked(): void
    {

    }
}