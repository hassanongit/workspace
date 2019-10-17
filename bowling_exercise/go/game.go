package main

type Game struct {
}

// Called for each roll of the bowling ball. Passed the number
// of pins knocked down on this roll.
func (g *Game) Roll(pins int) {

}

// Called once at the end of the game.
func (g *Game) Score() int {
	return 0
}
