package SelectionSort

import (
	"fmt"
	"testing"
)

func TestSelectionSort(t *testing.T)  {
	s := NewSelectionSort()
	arr := []int{1,4,2,3,6,5}
	s.sort2(arr)
	for _,e := range arr{
		fmt.Print(e," ")
	}
	fmt.Println()
}

func TestSelectionSortWithComparable(t *testing.T)  {
	s := NewSelectionSort()
	students := []Comparable{NewStudent("Alice",98),NewStudent("Bobo",100),NewStudent("Charles",66)}
	s.sortWithComparable(students)
	for _,student := range students {
		fmt.Println(student)
	}
}

func TestSelectionSortBenchMark(t *testing.T) {
	// O(n²)，数据规模差10倍，时间差了100倍
	dataSize := []int{10000,100000}
	for _,n := range dataSize {
		arr := generateRandomArray(n,n)
		sortTest(arr)
	}
}