package com.softlayer.labs.interview;
import java.util.List;

import junit.framework.TestCase;

public class SerialTest extends TestCase
{
    public void testSimpleSequentialList() {
        Serial serial = new Serial();
        List serials = serial.generate("a2010", 10, 1);

        assertEquals(10, serials.size());
        assertEquals("a2010", serials.get(0));
        assertEquals("a2011", serials.get(1));
        assertEquals("a2012", serials.get(2));
        assertEquals("a2013", serials.get(3));
        assertEquals("a2014", serials.get(4));
        assertEquals("a2015", serials.get(5));
        assertEquals("a2016", serials.get(6));
        assertEquals("a2017", serials.get(7));
        assertEquals("a2018", serials.get(8));
        assertEquals("a2019", serials.get(9));
    }
    
    public void testSimpleOffsetList() {
        Serial serial = new Serial();
        List serials = serial.generate("a2010", 10, 2);

        assertEquals(10, serials.size());
        assertEquals("a2010", serials.get(0));
        assertEquals("a2012", serials.get(1));
        assertEquals("a2014", serials.get(2));
        assertEquals("a2016", serials.get(3));
        assertEquals("a2018", serials.get(4));
        assertEquals("a201a", serials.get(5));
        assertEquals("a201c", serials.get(6));
        assertEquals("a201e", serials.get(7));
        assertEquals("a201g", serials.get(8));
        assertEquals("a201i", serials.get(9));
    }
    
    public void testSmallNumber() {
        Serial serial = new Serial();
        List serials = serial.generate("0", 11, 4);

        assertEquals(11, serials.size());
        assertEquals("0", serials.get(0));
        assertEquals("4", serials.get(1));
        assertEquals("8", serials.get(2));
        assertEquals("c", serials.get(3));
        assertEquals("g", serials.get(4));
        assertEquals("k", serials.get(5));
        assertEquals("o", serials.get(6));
        assertEquals("s", serials.get(7));
        assertEquals("w", serials.get(8));
        assertEquals("10", serials.get(9));
        assertEquals("14", serials.get(10));
    }
}
