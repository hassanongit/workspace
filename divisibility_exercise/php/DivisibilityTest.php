<?php

include "Divisibility.php";


class DivisibilityTest extends PHPUnit_Framework_TestCase
{   
    public function testDivisibleByThree()
    {
        $numbers = divisibleNumbers(range(0, 99), [3]);
        $this->assertTrue(in_array(0, $numbers));
        $this->assertTrue(in_array(3, $numbers));
        $this->assertTrue(in_array(6, $numbers));
        $this->assertTrue(in_array(9, $numbers));
        $this->assertTrue(in_array(15, $numbers));
        $this->assertTrue(in_array(33, $numbers));
        $this->assertTrue(in_array(42, $numbers));
        $this->assertTrue(in_array(45, $numbers));
        $this->assertTrue(in_array(48, $numbers));
        $this->assertTrue(in_array(63, $numbers));
        $this->assertTrue(in_array(90, $numbers));
        $this->assertTrue(in_array(96, $numbers));
        $this->assertEquals(34, count($numbers));
    }
    
    public function testDivisibleByFive()
    {
        $numbers = divisibleNumbers(range(0, 99), [5]);
        $this->assertTrue(in_array(0, $numbers));
        $this->assertTrue(in_array(5, $numbers));
        $this->assertTrue(in_array(15, $numbers));
        $this->assertTrue(in_array(20, $numbers));
        $this->assertTrue(in_array(30, $numbers));
        $this->assertTrue(in_array(45, $numbers));
        $this->assertTrue(in_array(50, $numbers));
        $this->assertTrue(in_array(65, $numbers));
        $this->assertTrue(in_array(75, $numbers));
        $this->assertTrue(in_array(95, $numbers));
        $this->assertEquals(20, count($numbers));
    }

    public function testDivisibleByThreeAndFive()
    {
        $numbers = divisibleNumbers(range(0, 99), [3, 5]);
        $this->assertTrue(in_array(0, $numbers));
        $this->assertTrue(in_array(3, $numbers));
        $this->assertTrue(in_array(5, $numbers));
        $this->assertTrue(in_array(21, $numbers));
        $this->assertTrue(in_array(24, $numbers));
        $this->assertTrue(in_array(25, $numbers));
        $this->assertTrue(in_array(50, $numbers));
        $this->assertTrue(in_array(63, $numbers));
        $this->assertTrue(in_array(75, $numbers));
        $this->assertTrue(in_array(99, $numbers));
        $this->assertEquals(54, count($numbers));
    }

    /**
     * @expectedException Exception
     */
    public function testInvalidDivisor()
    {
        $numbers = divisibleNumbers(range(0, 10), [0]);
        $this->assertEquals(0, count($numbers));
    }
}
