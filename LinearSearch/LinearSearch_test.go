package LinearSearch

import (
	"fmt"
	"testing"
)

func TestLinear(t *testing.T) {
	data := []int{24, 18, 12, 9, 16, 66, 32, 4}

	ls := NewLinearSearch()
	res := ls.Search(data, 16)
	fmt.Println(res)

	res2 := ls.Search(data,666)
	fmt.Println(res2)

	students := []Comparable{NewStudent("Alice"),NewStudent("Bobo"),NewStudent("Charles")}
	res3 := ls.SearchWithEqual(students,NewStudent("Bobo"))
	fmt.Println(res3)
}
