$:.unshift File.dirname(__FILE__)

require "minitest/autorun"
require "game"

class TestGame < MiniTest::Unit::TestCase
  def test_gutter_ball_game
    game = Game.new

    # 10 frames, 2 rolls each = 20 gutter balls.
    20.times do
      game.roll(0)
    end

    # End of the game!
    assert_equal(0, game.score())
  end
end