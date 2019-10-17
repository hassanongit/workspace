# Serial Generator

Serials are ascii strings containing a-z and 0-9. As a hardware supplier we
are often required to generate our own serial numbers for inventory tracking purposes.

Serials are usually generated in bulk and sent off to a printing service.

# Objectives

1. Write a method that returns a sequential set of serial numbers
2. Allow for offsets (skips) in the serial generation
3. Check valid bounds and edge cases


# Limitations and Suggestions

1. You have one hour pairing with us, one hour to work alone.
2. Keep it simple.
3. Relax.


# Running Your Code

## Java

```
$ cd java
$ mvn test
$ mvn -Dtest=SerialTest test
$ mvn -Dtest=SerialTest#testSimpleSequentialList test
```

## Javascript

```
$ cd javascript
$ expresso -I lib
```

## Lua

```
$ cd lua
$ busted test.lua
```

## Lisp

```
$ cd lisp
$ clisp serial.test.lisp
```

## PHP

```
$ cd php
$ php phpunit.phar SerialTest.php
```

## Python

```
$ cd python
$ python serial_test.py
```

## Go

```
$ cd go
$ go test
```

## C

Because C is unable to return an array of strings from a functions without using global pointers there a few changes.

1. The GetNextSerial method takes in the starting string, the index of the array to return, and the offset.
2. Return a single string that is the Nth generated serial from the starting serial and the offset.

```
$ cd c
$ make run_tests
```