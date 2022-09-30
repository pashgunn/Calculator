<?php

use JetBrains\PhpStorm\Pure;

require 'CalculatorPresenterInterface.php';

class CalculatorPresenter implements CalculatorPresenterInterface
{
    private Calculator $model;
    private CalculatorView $view;

    /**
     * @param Calculator $model
     */
    public function setModel(Calculator $model): void
    {
        $this->model = $model;
    }

    /**
     * @param CalculatorView $view
     */
    public function setView(CalculatorView $view): void
    {
        $this->view = $view;
    }

    #[Pure] public function onPlusClicked(): void
    {
        $firstArgument = (float)$this->view->getFirstArgumentAsString();
        $secondArgument = (float)$this->view->getSecondArgumentAsString();
        $result = $this->model->sum($firstArgument, $secondArgument);
        $this->view->printResult($result);
    }

    #[Pure] public function onMinusClicked(): void
    {
        $firstArgument = (float)$this->view->getFirstArgumentAsString();
        $secondArgument = (float)$this->view->getSecondArgumentAsString();
        $this->model->subtract($firstArgument, $secondArgument);
    }

    #[Pure] public function onMultiplyClicked(): void
    {
        $firstArgument = (float)$this->view->getFirstArgumentAsString();
        $secondArgument = (float)$this->view->getSecondArgumentAsString();
        $this->model->multiply($firstArgument, $secondArgument);
    }

    public function onDivideClicked(): void
    {
        $firstArgument = (float)$this->view->getFirstArgumentAsString();
        $secondArgument = (float)$this->view->getSecondArgumentAsString();
        $this->model->divide($firstArgument, $secondArgument);
    }
}