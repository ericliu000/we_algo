package Stack

import (
	"fmt"
	"strings"
)

type ArrayStack struct {
	array *Array
}

func (this *ArrayStack) GetSize() int {
	return this.array.GetSize()
}

func (this *ArrayStack) IsEmpty() bool {
	return this.array.IsEmpty()
}

func (this *ArrayStack) GetCapacity() int {
	return this.array.GetCapacity()
}

func (this *ArrayStack) Push(e interface{}) {
	this.array.AddLast(e)
}

func (this *ArrayStack) Pop() interface{} {
	return this.array.RemoveLast()
}

func (this *ArrayStack) Peek() interface{} {
	return this.array.GetLast()
}

func (this *ArrayStack) String() string {
	var res strings.Builder
	res.WriteString("Stack: ")
	res.WriteString("[")
	for i := 0; i < this.array.GetSize(); i++ {
		res.WriteString(fmt.Sprint(this.array.Get(i)))
		if i != this.array.GetSize() - 1 {
			res.WriteString(", ")
		}
	}
	res.WriteString("] top")
	return res.String()
}

func NewArrayStack(capacity int) *ArrayStack {
	return &ArrayStack{
		array: NewArray(capacity),
	}
}

func NewArrayStackDefault() *ArrayStack {
	return &ArrayStack{
		array: NewArrayDefault(),
	}
}