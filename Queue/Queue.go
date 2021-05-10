package Queue

type Queue interface {
	GetSize() int
	IsEmpty() bool
	Enqueue(e interface{})
	Dequeue() interface{}
	GetFront() interface{}
}
