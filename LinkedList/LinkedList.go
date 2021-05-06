package LinkedList

type Node struct {
	e interface{}
	next *Node
}

func NewNode(e interface{}, next *Node) *Node {
	return &Node{e: e, next: next}
}

func NewNodeDefault(e interface{}) *Node {
	return NewNode(e,nil)
}

type LinkedList struct {
	head *Node
	size int
}

func (this *LinkedList) GetSize() int {
	return this.size
}

func (this *LinkedList) IsEmpty() bool {
	return this.size == 0
}

func (this *LinkedList) AddFirst(e interface{}) {
	node := NewNodeDefault(e)
	node.next = this.head
	this.head = node
	this.size ++
}

func (this *LinkedList) Add(e interface{}, index int) {
	if index < 0 || index > this.size {
		panic("Add failed, Illegal index.")
	}
	if index == 0 {
		this.AddFirst(e)
	}else {
		var prev = this.head
		for i := 0; i < index - 1; i++ {
			prev = prev.next
		}
		node := NewNodeDefault(e)
		node.next = prev.next
		prev.next = node
		this.size++
	}
}

func (this *LinkedList) AddLast(e interface{}) {
	this.Add(e,this.size)
}

func NewLinkedList() *LinkedList {
	return &LinkedList{nil,0}
}




