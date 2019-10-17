package main

import (
	"testing"
)

func TestRouterCreation(t *testing.T) {
	g := &Game{}

	// 10 frames, 2 rolls each = 20 gutter balls.
	for i := 0; i < 20; i++ {
		g.Roll(0)
	}

	// End of the game!
	if g.Score() != 0 {
		t.Error("Gutter ball game resulted in non-zero score.")
	}
}
