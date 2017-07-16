<?php

require 'calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase {

  public $calculatorInstance;

  public function setUp() {
    $this->calculatorInstance = new Calculator();
  }

  public function testAddition() {
    $this->calculatorInstance->setTotal(0);  
  
    $this->calculatorInstance->addOne();

    $this->assertEquals(1, $this->calculatorInstance->getTotal());
  }

}
