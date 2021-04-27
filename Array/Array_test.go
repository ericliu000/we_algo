package Array

import (
	"fmt"
	"testing"
)

func TestArray(t *testing.T) {
	arr := NewArrayDefault()
	for i := 0; i < 10; i++ {
		arr.AddLast(i)
	}
	fmt.Println(arr)

	arr.Add(1, 100)
	fmt.Println(arr)

	arr.AddFirst(-1)
	fmt.Println(arr)

	arr.Remove(2)
	fmt.Println(arr)

	arr.RemoveElement(4)
	fmt.Println(arr)

	arr.RemoveFirst()
	fmt.Println(arr)

	arr2 := NewArrayDefault()
	arr2.AddLast(NewStudent("Alice",100))
	arr2.AddLast(NewStudent("Bob",66))
	arr2.AddLast(NewStudent("Charlie",88))
	fmt.Println(arr2)
}
