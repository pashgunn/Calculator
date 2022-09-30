<?php

require 'CalculatorPresenterInterface.php';

class CalculatorController implements CalculatorPresenterInterface
{
    private Calculator $model;
    private CalculatorView $view;
    private string $firstArgument;
    private string  $secondArgument;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function setFirstArgument(string $firstArgument): void
    {
        $this->firstArgument = $firstArgument;
    }

    public function setSecondArgument(string $secondArgument): void
    {
        $this->secondArgument = $secondArgument;
    }

    public function getFirstArgumentAsString(): string
    {
        return $this->firstArgument;
    }

    public function getSecondArgumentAsString(): string
    {
        return $this->secondArgument;
    }

    public function onPlusClicked(): void
    {
        $first = (float)$this->getFirstArgumentAsString();
        $second = (float)$this->getSecondArgumentAsString();
        $result = $this->model->sum($first, $second);
        $this->view->printResult($result);
    }

    public function onMinusClicked(): void
    {
        $first = (float)$this->getFirstArgumentAsString();
        $second = (float)$this->getSecondArgumentAsString();
        $result = $this->model->subtract($first, $second);
        $this->view->printResult($result);
    }

    public function onMultiplyClicked(): void
    {
        $first = (float)$this->getFirstArgumentAsString();
        $second = (float)$this->getSecondArgumentAsString();
        $result = $this->model->multiply($first, $second);
        $this->view->printResult($result);
    }

    public function onDivideClicked(): void
    {
        $first = (float)$this->getFirstArgumentAsString();
        $second = (float)$this->getSecondArgumentAsString();
        $result = $this->model->divide($first, $second);
        if(is_float($result)) {
            $this->view->printResult($result);
        } else {
            $this->view->displayError($result);
        }
    }
}