package linear_search

import (
	"testing"
)

func TestSearch(t *testing.T) {
	var data = [4]int{23, 45, 67, 1}
	var target = 1
	actual := Search(data, target)
	expected := 3
	if actual != expected {
		t.Errorf("actual %d; expected %d", actual, expected)
	}
}
