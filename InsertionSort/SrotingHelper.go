package InsertionSort

import (
	"fmt"
	"time"
)

func isSorted(arr []int) bool {
	for i := 1; i < len(arr) - 1; i++ {
		if arr[i-1] > arr[i] {
			return false
		}
	}
	return true
}

func sortTest(arr []int) {
	startTime := time.Now().UnixNano()
	s := NewInsertionSort()
	s.SortV2(arr)
	endTime := time.Now().UnixNano()
	totalTime := float64(endTime-startTime) / 1000000000.0
	if !isSorted(arr) {
		panic("selectionSort failed")
	}
	fmt.Printf("%s , n = %d : %f s \n","selectionSort",len(arr),totalTime)
}
