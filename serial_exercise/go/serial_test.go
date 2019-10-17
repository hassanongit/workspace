package main

import (
	"errors"
	"testing"
)

func verifyResults(t *testing.T, result []string, expectedResult []string) {
	if len(result) != len(expectedResult) {
		t.Errorf("Wrong number of serials returned. got: %d, want: %d", len(result), len(expectedResult))
	}

	if len(expectedResult) > 0 {
		for i, serial := range result {
			if expectedResult[i] != serial {
				t.Errorf("Unexpected serial at %d. got: %s, want: %s.", i, serial, expectedResult[i])
			}
		}
	}
}

func verifyError(t *testing.T, err error, expectedErr error) {
	if err == nil && expectedErr != nil {
		t.Errorf("Expected error not returned. want: %s", expectedErr.Error())
		return
	}

	if err != nil && expectedErr == nil {
		t.Errorf("Unexpected error returned. got: %s", err.Error())
		return
	}

	if err != nil && expectedErr != nil && err.Error() != expectedErr.Error() {
		t.Errorf("Returned error does not match expected error. got: %s, want: %s", err.Error(), expectedErr.Error())
	}
}

func TestEmptyList(t *testing.T) {
	result, err := generateSerialNumbers("", 10, 1)

	expectedResult := []string{}

	verifyError(t, err, errors.New("Invalid startSerial"))
	verifyResults(t, result, expectedResult)
}

func TestSimpleSequentialList(t *testing.T) {
	result, err := generateSerialNumbers("a2010", 10, 1)

	expectedResult := []string{
		"a2010",
		"a2011",
		"a2012",
		"a2013",
		"a2014",
		"a2015",
		"a2016",
		"a2017",
		"a2018",
		"a2019",
	}

	verifyError(t, err, nil)
	verifyResults(t, result, expectedResult)
}

func TestSimpleOffsetList(t *testing.T) {
	result, err := generateSerialNumbers("a2010", 10, 2)

	expectedResult := []string{
		"a2010",
		"a2012",
		"a2014",
		"a2016",
		"a2018",
		"a201a",
		"a201c",
		"a201e",
		"a201g",
		"a201i",
	}

	verifyError(t, err, nil)
	verifyResults(t, result, expectedResult)
}

func TestBadCount(t *testing.T) {
	result, err := generateSerialNumbers("a2010", -1, 1)

	expectedResult := []string{}

	verifyError(t, err, errors.New("Invalid count"))
	verifyResults(t, result, expectedResult)
}

func TestBadOffset(t *testing.T) {
	result, err := generateSerialNumbers("a2010", 10, -1)

	expectedResult := []string{}

	verifyError(t, err, errors.New("Invalid offset"))
	verifyResults(t, result, expectedResult)
}
