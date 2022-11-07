<?php

require_once "tests/Calculator/ChromeDriverTest.php";

use Behat\Behat\Context\Context;
use Calculator\ChromeDriverTest;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private ChromeDriverTest $test;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->test = new ChromeDriverTest();
    }

    /**
     * @BeforeScenario
     */
    public function before(){
        $this->test->setUp();
    }

    /**
     * @AfterScenario
     */
    public function after(){
        $this->test->tearDown();
    }

    /**
     * @Given /^I open the web page$/
     */
    public function iOpenTheWebPage()
    {
        $this->test->openPage();
    }

    /**
     * @When /^I enter (\d*\.?\d+) as first number$/
     */
    public function iEnterAsFirstNumber($arg1)
    {
        $this->test->inputFirstNum($arg1);
    }

    /**
     * @When /^I enter (\d*\.?\d+) as second number$/
     */
    public function iEnterAsSecondNumber($arg1)
    {
        $this->test->inputSecondNum($arg1);
    }

    /**
     * @When /^I select ([\+\-\*\/]) as type of operation$/
     */
    public function iSelectAsTypeOfOperation($arg1)
    {
        $this->test->chooseOperation($arg1);
    }

    /**
     * @Then /^The result should be (\d*\.?\d+)$/
     */
    public function theResultShouldBe($arg1)
    {
        $this->test->check($arg1);
    }
}
