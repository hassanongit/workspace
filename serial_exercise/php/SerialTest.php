<?php

include "Serial.php";

class SerialTest extends PHPUnit_Framework_TestCase
{
    public function testEmptyList()
    {
       $this->assertEquals(0, count(generateSerialNumbers('', 0, 0)));
    }
    
    /**
     * @expectedException Exception
     */
    public function testBadCount()
    {
        $serials = generateSerialNumbers('a2010', -1, 1);
        $this->assertEquals(0, count($serials));
    }
    
    /**
     * @expectedException Exception
     */
    public function testBadOffset()
    {
        $serials = generateSerialNumbers('a2010', 0,-1);
        $this->assertEquals(0, count($serials));
    }
    
    public function testSimpleSequentialList()
    {
        $serials = generateSerialNumbers('a2010', 10, 1);
        /*
        foreach($serials as $k){
            print($k."\n");
        }
        */
        $this->assertTrue(in_array('a2010', $serials));
        $this->assertTrue(in_array('a2011', $serials));
        $this->assertTrue(in_array('a2012', $serials));
        $this->assertTrue(in_array('a2013', $serials));
        $this->assertTrue(in_array('a2014', $serials));
        $this->assertTrue(in_array('a2015', $serials));
        $this->assertTrue(in_array('a2016', $serials));
        $this->assertTrue(in_array('a2017', $serials));
        $this->assertTrue(in_array('a2018', $serials));
        $this->assertTrue(in_array('a2019', $serials));
        $this->assertEquals(10, count($serials));
    }
    
    public function testSimpleOffsetList()
    {
        $serials = generateSerialNumbers('a2010', 10, 2);
        /*
        foreach($serials as $k){
            print($k."\n");
        }*/
        
        $this->assertTrue(in_array('a2010', $serials));
        $this->assertTrue(in_array('a2012', $serials));
        $this->assertTrue(in_array('a2014', $serials));
        $this->assertTrue(in_array('a2016', $serials));
        $this->assertTrue(in_array('a2018', $serials));
        $this->assertTrue(in_array('a201a', $serials));
        $this->assertTrue(in_array('a201c', $serials));
        $this->assertTrue(in_array('a201e', $serials));
        $this->assertTrue(in_array('a201g', $serials));
        $this->assertTrue(in_array('a201i', $serials));
        $this->assertEquals(10, count($serials));
    }
    
    public function testSmallNumberList()
    {
        $serials = generateSerialNumbers('0', 5, 2);
        /*
        foreach($serials as $k){
            print($k."\n");
        }*/
        
        $this->assertTrue(in_array('0', $serials));
        $this->assertTrue(in_array('2', $serials));
        $this->assertTrue(in_array('4', $serials));
        $this->assertTrue(in_array('6', $serials));
        $this->assertTrue(in_array('8', $serials));
        $this->assertEquals(5, count($serials));
    }
}