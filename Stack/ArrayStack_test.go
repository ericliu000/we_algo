package Stack

import (
	"fmt"
	"testing"
)

func TestArrayStack(t *testing.T) {
	stack := NewArrayStackDefault()
	for i := 0; i < 5 ; i++ {
		stack.Push(i)
		fmt.Println(stack)
	}
	stack.Pop()
	fmt.Println(stack)
}
