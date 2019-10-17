#include "unity/unity.h"
#include "Serial.h"

void test_EmptyList(void)
{
    char *expectedResult = NULL;
    char *result = GetNextSerial(NULL, 0, 1);

    TEST_ASSERT_EQUAL_STRING(expectedResult, result);
}

void test_SimpleSequentialList(void)
{
    char *expectedResults[] = {
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
    };

    int i = 0;
    for (i=0; i<10; i++) {
        TEST_ASSERT_EQUAL_STRING(expectedResults[i], GetNextSerial("a2010", i, 1));
    }
}

void test_SimpleOffsetList(void)
{
    char *expectedResults[] = {
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
    };

    int i = 0;
    for (i=0; i<10; i++) {
        TEST_ASSERT_EQUAL_STRING(expectedResults[i], GetNextSerial("a2010", i, 2));
    }
}

void test_BadOffset(void)
{
    TEST_ASSERT_EQUAL_STRING(NULL, GetNextSerial("a2010", 2, -1));
}

int main(void)
{
    UNITY_BEGIN();
    RUN_TEST(test_EmptyList);
    RUN_TEST(test_SimpleSequentialList);
    RUN_TEST(test_SimpleOffsetList);
    RUN_TEST(test_BadOffset);
    return UNITY_END();
}