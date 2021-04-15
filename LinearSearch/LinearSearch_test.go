package LinearSearch

import (
	"fmt"
	"testing"
)

func TestLinear(t *testing.T) {
	arrayGenerator := NewArrayGenerator()
	data := arrayGenerator.GenerateOrderedArray(10)

	ls := NewLinearSearch()
	res := ls.Search(data, 6)
	fmt.Println(res)

	res2 := ls.Search(data,666)
	fmt.Println(res2)

	students := []Comparable{NewStudent("Alice"),NewStudent("Bobo"),NewStudent("Charles")}
	res3 := ls.SearchWithEqual(students,NewStudent("Bobo"))
	fmt.Println(res3)
}

func TestLinearSearchBenchMark(t *testing.T)  {
	//直接看case运行时间即可
	n := 100000000
	arrayGenerator := NewArrayGenerator()
	data := arrayGenerator.GenerateOrderedArray(n)
	ls := NewLinearSearch()
	for k:=0;k<100;k++ {
		ls.Search(data, n)
	}
}