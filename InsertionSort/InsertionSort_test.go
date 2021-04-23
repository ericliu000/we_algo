package InsertionSort

import (
	"testing"
)

func TestInsertionSort(t *testing.T) {
	dataSize := []int{10000,100000}
	for _, n := range dataSize {
		arr := generateRandomArray(n,n)
		sortTest(arr)
	}
}
