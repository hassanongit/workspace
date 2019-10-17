<?php

include "Game.php";


class GameTest extends PHPUnit_Framework_TestCase
{
    public function testGutterBallGame()
    {
        $game = new Game;

        // 10 frames, 2 rolls each = 20 gutter balls.
        for ($i = 0; $i < 20; $i++) {
            $game->roll(0);
        }

        // End of the game!
        $this->assertEquals(0, $game->score());
    }
}
