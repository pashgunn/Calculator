<?php

namespace Calculator;

require 'vendor/autoload.php';

use Facebook\WebDriver\Chrome\ChromeDriver;
use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;

class ChromeDriverTest extends TestCase
{

    protected ChromeDriver $driver;

    public function build_chrome_capabilities(): DesiredCapabilities
    {
        return DesiredCapabilities::chrome();
    }

    public function setUp(): void
    {
        putenv('WEBDRIVER_CHROME_DRIVER=C:\bin\chromedriver.exe');
        $this->driver = ChromeDriver::start();
    }

    public function tearDown(): void
    {
        $this->driver->quit();
    }

    public function testDivision()
    {
        $this->driver->get("http://calculator/");
        $this->driver->manage()->window()->maximize();
        $element = $this->driver->findElement(WebDriverBy::name("num1"));
        if($element) {
            $element->sendKeys("1");
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::name("num2"));
        if($element) {
            $element->sendKeys("2");
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::id("/"));
        if($element) {
            $element->click();
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::name("result"));
        $this->assertEquals(0.5, $element->getText());
    }

    public function testPlus()
    {
        $this->driver->get("http://calculator/");
        $this->driver->manage()->window()->maximize();
        $element = $this->driver->findElement(WebDriverBy::name("num1"));
        if($element) {
            $element->sendKeys("1");
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::name("num2"));
        if($element) {
            $element->sendKeys("2");
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::id("+"));
        if($element) {
            $element->click();
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::name("result"));
        $this->assertEquals(3, $element->getText());
    }

    public function testMultiply()
    {
        $this->driver->get("http://calculator/");
        $this->driver->manage()->window()->maximize();
        $element = $this->driver->findElement(WebDriverBy::name("num1"));
        if($element) {
            $element->sendKeys("1");
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::name("num2"));
        if($element) {
            $element->sendKeys("2");
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::id("*"));
        if($element) {
            $element->click();
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::name("result"));
        $this->assertEquals(2, $element->getText());
    }

    public function testMinus()
    {
        $this->driver->get("http://calculator/");
        $this->driver->manage()->window()->maximize();
        $element = $this->driver->findElement(WebDriverBy::name("num1"));
        if($element) {
            $element->sendKeys("1");
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::name("num2"));
        if($element) {
            $element->sendKeys("2");
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::id("-"));
        if($element) {
            $element->click();
            sleep(1);
        }
        $element = $this->driver->findElement(WebDriverBy::name("result"));
        $this->assertEquals(-1, $element->getText());
    }
}