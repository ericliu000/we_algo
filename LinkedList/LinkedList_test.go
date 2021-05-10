package LinkedList

import (
	"fmt"
	"testing"
)

func TestLinkedListWithDummy_Add(t *testing.T) {
	linkedList := NewLinkedListWithDummy()
	for i := 0; i < 5; i++ {
		linkedList.AddFirst("a")
		fmt.Println(linkedList)
	}
	linkedList.Add("b",2)
	fmt.Println(linkedList)
}



