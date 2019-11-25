package main

import "testing"

func verifyResult(t *testing.T, input string, given bool, expected bool) {
	if given != expected {
		t.Fatalf("Unexpected result for %s. got: %t, want: %t", input, given, expected)
	}
}

func runTests(t *testing.T, inputs map[string]bool) {
	for input, expectedResult := range inputs {
		verifyResult(t, input, isValidSyntax(input), expectedResult)
	}
}

func TestEmpty(t *testing.T) {
	inputs := map[string]bool{
		"": true,
	}

	runTests(t, inputs)
}

func TestValidSelectionSimple(t *testing.T) {
	inputs := map[string]bool{
		"()": true,
	}

	runTests(t, inputs)
}

func TestInvalidSelectionSimple(t *testing.T) {
	inputs := map[string]bool{
		"(":  false,
		")":  false,
		")(": false,
	}

	runTests(t, inputs)
}

func TestValidSelectionComplex(t *testing.T) {
	inputs := map[string]bool{
		"((()()))()()()":       true,
		"()()()((()()))":       true,
		"()()((()()()))()()":   true,
		"(()()((()()()))()())": true,
	}

	runTests(t, inputs)
}

func TestInvalidSelectionComplex(t *testing.T) {
	inputs := map[string]bool{
		"(()()))()()()":       false,
		"()()()((()())":       false,
		")()((()()()))()()":   false,
		"(()()((()()()))()()": false,
	}

	runTests(t, inputs)
}

func TestValidSelectionComplexExtra(t *testing.T) {
	inputs := map[string]bool{
		"{((()[]))(){}()}":     true,
		"{}{}{}[(()())]":       true,
		"()()(({}[]{}))()()":   true,
		"[[]()((()()()))()()]": true,
	}

	runTests(t, inputs)
}

func TestInvalidSelectionComplexExtra(t *testing.T) {
	inputs := map[string]bool{
		"{((()[]))(){}()":       false,
		"{{}{}[(()())]":         false,
		"]()()(({}[]{}))()()":   false,
		"[[]()((()()()))()()]{": false,
	}

	runTests(t, inputs)
}

func TestInvalidSelectioncomplexExtraExtra(t *testing.T) {
	inputs := map[string]bool{
		"{(})": false,
	}

	runTests(t, inputs)
}
