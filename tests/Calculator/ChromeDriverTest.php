<?php

namespace Calculator;

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\Remote\RemoteWebDriver;

class ChromeDriverTest extends TestCase
{
    protected RemoteWebDriver $driver;

    public function setUp(): void
    {
        $serverUrl = 'http://localhost:4444';
        $capabilities = DesiredCapabilities::chrome();
        $this->driver = RemoteWebDriver::create($serverUrl, $capabilities);
    }

    public function tearDown(): void
    {
        $this->driver->quit();
    }

    public function templatedTest($value1, $value2, $operation, $expected)
    {
        $url = 'http://localhost:63342/Calculator/index.php';
        $this->driver->get($url);
        $this->driver->manage()->window()->maximize();
        $element = $this->driver->findElement(WebDriverBy::name("num1"));
        if($element) {
            $element->sendKeys($value1);
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::name("num2"));
        if($element) {
            $element->sendKeys($value2);
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::id($operation));
        if($element) {
            $element->click();
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::name("result"));
        $this->assertEquals($expected, $element->getText());
    }

    public function tests()
    {
        $this->templatedTest(5, 2, "+", 7);
        $this->templatedTest(5, 2, "-", 3);
        $this->templatedTest(5, 2, "*", 10);
        $this->templatedTest(5, 2, "/", 2.5);
    }
}