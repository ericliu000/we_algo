package SelectionSort

import (
	"fmt"
	"testing"
)

func TestSelectionSort(t *testing.T)  {
	s := NewSelectionSort()
	arr := []int{1,4,2,3,6,5}
	s.sort(arr)
	for _,e := range arr{
		fmt.Print(e," ")
	}
	fmt.Println()
}
