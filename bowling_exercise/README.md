# Bowling

```
The Game of Bowling

 -----------------------------------------------------------
| 1,4|  4,5|  6,/|  5,/|    X|  0,1|  7,/|  6,/|    X| 2,/,6|
|    |     |     |     |     |     |     |     |     |      |
|   5|   14|   29|   49|   60|   61|   77|   97|  117|   133|
 -----------------------------------------------------------


Legend
==================
, = Roll Delimiter
- = Scoreboard
| = Frame
X = Strike
/ = Spare
```

The game consists of 10 frames. In each frame the player has two opportunities
to knock down 10 pins. The score for the frame is the total number of pins
knocked down, plus bonuses for strikes and spares.

A spare is when the player knocks down all 10 pins in two tries. The bonus for
that frame is the number of pins knocked down by the next roll. So in frame 3
above, the score is 10 (the total number knocked down) plus a bonus of 5 (the
number of pins knocked down on the next roll.)

A strike is when the player knocks down all 10 pins on his first try. The bonus
for that frame is the value of the next two balls rolled.

In the tenth frame a player who rolls a spare or strike is allowed to roll the
extra balls to complete the frame. However no more than three balls can be
rolled in tenth frame.


# Resources

http://en.wikipedia.org/wiki/Ten-pin_bowling#Scoring


# Objectives

1. Support a gutter ball game. (Done!)
2. Support non-zero rolls.
3. Support spares.
4. Support strikes.
5. Support the perfect game: a score of 300.


# Limitations and Suggestions

1. You have one hour pairing with us, one hour to work alone.
2. Keep it simple.
3. Relax.


# Running Your Code

## C++

```
$ cd cpp
$ make
$ ./game_test
```

## Go

```
$ cd go
$ go test
```

## Java

```
$ cd java
$ mvn test
$ mvn -Dtest=GameTest test
$ mvn -Dtest=GameTest#testGutterBallGame test
```

## PHP

```
$ cd php
$ php phpunit.phar GameTest.php
```

## Python

```
$ cd python
$ python game_test.py
```

## Ruby

```
$ cd ruby
$ ruby game_test.rb
```
