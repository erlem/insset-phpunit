<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        require_once 'Calculator.php';
    }

    public function testAdd() {
        $this->assertEquals(4, Calculator::add(2, 2));
        $this->assertEquals(100, Calculator::add(81, 19));
        $this->assertEquals(23, Calculator::add(20, 3));
    }

    public function testSubtract() {
        $this->assertEquals(-3, Calculator::subtract(4, 7));
        $this->assertEquals(0, Calculator::subtract(6, 6));
        $this->assertEquals(7, Calculator::subtract(4, -3));
    }

    public function testMultiply() {
        $this->assertEquals(63, Calculator::multiply(9, 7));
        $this->assertEquals(-14, Calculator::multiply(2, -7));
        $this->assertEquals(35, Calculator::multiply(-5, -7));
    }

    public function testDivide() {
        $this->assertEquals(1, Calculator::divide(9, 9));
        $this->assertEquals(3, Calculator::divide(-9, -3));
        $this->assertEquals(-5, Calculator::divide(-10, 2));
    }

}

?>