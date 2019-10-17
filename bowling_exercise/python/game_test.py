import unittest
from game import Game


class TestGame(unittest.TestCase):
    def test_gutter_ball_game(self):
        game = Game()

        # 10 frames, 2 rolls each = 20 gutter balls.
        for _ in range(20):
            game.roll(0)

        # End of the game!
        self.assertEqual(0, game.score())

if __name__ == '__main__':
    unittest.main()
