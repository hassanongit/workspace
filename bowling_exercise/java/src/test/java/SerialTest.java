package com.softlayer.labs.interview;

import junit.framework.TestCase;

public class GameTest extends TestCase
{
    public void testGutterBallGame() {
        Game game = new Game();

        // 10 frames, 2 rolls each = 20 gutter balls.
        for(int i = 0; i < 20; i++) {
            game.roll(0);            
        }

        // End of the game!
        assertEquals(0, game.score());
    }
}