package LinkedList

import (
	"fmt"
	"testing"
)

func TestLinkedListWithDummy(t *testing.T) {
	linkedList := NewLinkedListWithDummy()
	for i := 0; i < 5; i++ {
		str := "01234"
		linkedList.AddFirst(string(str[i]))
		fmt.Println(linkedList)
	}

	linkedList.Add("666",2)
	fmt.Println(linkedList)

	linkedList.Remove(2)
	fmt.Println(linkedList)

	linkedList.RemoveFirst()
	fmt.Println(linkedList)

	linkedList.RemoveLast()
	fmt.Println(linkedList)
}





