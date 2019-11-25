package com.softlayer.labs.interview;
import java.util.List;

import junit.framework.TestCase;

public class MatchingTest extends TestCase
{
    public void test_empty() {
        Matching matcher = new Matching();
        assertTrue(matcher.isValidSyntax(""));
    }
    
    public void test_valid_selection_simple() {
        Matching matcher = new Matching();
        assertTrue(matcher.isValidSyntax("()"));
    }
    
    public void test_invalid_selection_simple() {
        Matching matcher = new Matching();
        assertFalse(matcher.isValidSyntax("("));
        assertFalse(matcher.isValidSyntax(")"));
        assertFalse(matcher.isValidSyntax(")("));
    }
    
    public void test_valid_selection_complex() {
        Matching matcher = new Matching();
        assertTrue(matcher.isValidSyntax("((()()))()()()"));
        assertTrue(matcher.isValidSyntax("()()()((()()))"));
        assertTrue(matcher.isValidSyntax("()()((()()()))()()"));
        assertTrue(matcher.isValidSyntax("(()()((()()()))()())"));
    }
    
    public void test_invalid_selection_complex() {
        Matching matcher = new Matching();
        assertFalse(matcher.isValidSyntax("(()()))()()()"));
        assertFalse(matcher.isValidSyntax("()()()((()())"));
        assertFalse(matcher.isValidSyntax(")()((()()()))()()"));
        assertFalse(matcher.isValidSyntax("(()()((()()()))()()"));
    }
    
    public void test_valid_selection_complex_extra() {
        Matching matcher = new Matching();
        assertTrue(matcher.isValidSyntax("{((()[]))(){}()}"));
        assertTrue(matcher.isValidSyntax("{}{}{}[(()())]"));
        assertTrue(matcher.isValidSyntax("()()(({}[]{}))()()"));
        assertTrue(matcher.isValidSyntax("[[]()((()()()))()()]"));
    }
    
    public void test_invalid_selection_complex_extra() {
        Matching matcher = new Matching();
        assertFalse(matcher.isValidSyntax("{((()[]))(){}()"));
        assertFalse(matcher.isValidSyntax("{{}{}[(()())]"));
        assertFalse(matcher.isValidSyntax("]()()(({}[]{}))()()"));
        assertFalse(matcher.isValidSyntax("[[]()((()()()))()()]{"));
    }
    
    public void test_invalid_selection_complex_extra_extra() {
        Matching matcher = new Matching();
        assertFalse(matcher.isValidSyntax("{(})"));
    }
}