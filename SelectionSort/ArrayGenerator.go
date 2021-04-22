package SelectionSort

import (
	"math/rand"
	"time"
)

func generateRandomArray(n int, bound int) []int {
	if n <= 0 {
		return nil
	}
	arr := make([]int, n)
	rand.Seed(time.Now().UnixNano())
	for i := 0; i < n; i++ {
		arr[i] = rand.Intn(bound)
	}
	return arr
}

func generateOrderedArray(n int) []int {
	if n <= 0 {
		return nil
	}
	arr := make([]int, n)
	for i := 0; i < n; i++ {
		arr[i] = i
	}
	return arr
}
