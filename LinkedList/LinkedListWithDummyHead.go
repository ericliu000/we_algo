package LinkedList

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

func NewLinkedListWithDummy() *LinkedListWithDummy {
	return &LinkedListWithDummy{NewNodeDefault(nil),0}
}




