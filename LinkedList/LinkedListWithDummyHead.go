package LinkedList

import (
	"strings"
)

type LinkedListWithDummy struct {
	dummyHead *Node
	size int
}

func (this *LinkedListWithDummy) GetSize() int {
	return this.size
}

func (this *LinkedListWithDummy) IsEmpty() bool {
	return this.size == 0
}

func (this *LinkedListWithDummy) Add(e interface{}, index int) {
	if index < 0 || index > this.size {
		panic("Add failed, Illegal index.")
	}
	var prev = this.dummyHead
	for i := 0; i < index; i++ {
		prev = prev.next
	}
	node := NewNodeDefault(e)
	node.next = prev.next
	prev.next = node
	this.size++
}

func (this *LinkedListWithDummy) AddFirst(e interface{}) {
	this.Add(e,0)
}


func (this *LinkedListWithDummy) AddLast(e interface{}) {
	this.Add(e,this.size)
}

func (this *LinkedListWithDummy) Get(index int) interface{} {
	if index < 0 || index >= this.size {
		panic("Get failed. Illegal index.")
	}
	cur := this.dummyHead.next
	for i := 0; i < index ; i++ {
		cur = cur.next
	}
	return cur.e
}

func (this *LinkedListWithDummy) GetLast() interface{} {
	return this.Get(this.size - 1)
}

func (this *LinkedListWithDummy) Set(index int, e interface{}) {
	if index < 0 || index >= this.size {
		panic("Get failed. Illegal index.")
	}
	cur := this.dummyHead.next
	for i := 0; i < index; i++ {
		cur = cur.next
	}
	cur.e = e
}

func (this *LinkedListWithDummy) Contains(e interface{}) bool {
	cur := this.dummyHead.next
	for cur != nil {
		if cur.e == e {
			return true
		}
		cur = cur.next
	}
	return false
}

func (this *LinkedListWithDummy) Remove(index int) interface{} {
	if index < 0 || index >= this.size {
		panic("Get failed. Illegal index.")
	}
	prev := this.dummyHead
	for i := 0; i < index; i++ {
		prev = prev.next
	}
	retNode := prev.next
	prev.next = retNode.next
	retNode.next = nil
	this.size--
	return retNode
}

func (this *LinkedListWithDummy) RemoveFirst() interface{} {
	return this.Remove(0)
}

func (this *LinkedListWithDummy) RemoveLast() interface{} {
	return this.Remove(this.size - 1)
}

func (this *LinkedListWithDummy) String() string {
	var res strings.Builder
	cur := this.dummyHead.next
	for cur != nil {
		res.WriteString(cur.e.(string) + "->")
		cur = cur.next
	}
	res.WriteString("NULL")
	return res.String()
}

func NewLinkedListWithDummy() *LinkedListWithDummy {
	return &LinkedListWithDummy{NewNodeDefault(nil),0}
}




