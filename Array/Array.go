package Array

import (
	"fmt"
	"strings"
)

type Array struct {
	data []interface{}
	size int
}

func (this *Array) GetSize() int {
	return this.size
}

func (this *Array) GetCapacity() int {
	return len(this.data)
}

func (this *Array) AddFirst(e interface{}) {
	this.Add(0,e)
}

func (this *Array) AddLast(e interface{}) {
	this.Add(this.size,e)
}

func (this *Array) Add(index int, e interface{}) {
	if this.size == this.GetCapacity() {
		this.resize(2 * this.size)
	}

	if index < 0 || index > this.size {
		panic("Add failed .Require index >=0 and index <= size")
	}

	for i := this.size - 1; i > index ; i-- {
		this.data[i + 1] = this.data[i]
	}
	this.data[index] = e
	this.size++
}

func (this *Array) resize(newCapacity int) {
	newData := make([]interface{},newCapacity)
	for i := 0; i < this.size; i++ {
		newData[i] = this.data[i]
	}
	this.data = newData
}

func (this *Array) Get(index int) interface{} {
	return this.data[index]
}

func (this *Array) Set(index int, e interface{}) {
	if index < 0 || index >= this.size {
		panic("Set failed, Index is illegal")
	}
	this.data[index] = e
}

func (this *Array) Contains(e interface{}) bool {
	for i := 0; i < this.size; i++ {
		if this.data[i] == e {
			return true
		}
	}
	return false
}

func (this *Array) Find(e interface{}) int {
	for i := 0; i < this.size; i++ {
		if this.data[i] == e {
			return i
		}
	}
	return -1
}

func (this *Array) Remove(index int) interface{} {
	if index < 0 || index >= this.size {
		panic("Remove failed. Index is illegal")
	}
	ret := this.data[index]
	for i := index; i < this.size - 1 ; i++ {
		this.data[i] = this.data[i+1]
	}

	this.size--
	this.data[this.size] = nil

	if this.size == len(this.data) / 4 && len(this.data) / 2 !=0{
		this.resize(len(this.data) / 2)
	}

	return ret
}

func (this *Array) RemoveFirst() interface{} {
	return this.Remove(0)
}

func (this *Array) RemoveLast() interface{} {
	return this.Remove(this.size - 1)
}

func (this *Array) RemoveElement(e interface{}) {
	index := this.Find(e)
	if index != -1{
		this.Remove(index)
	}
}

func (this *Array) String() string {
	var res strings.Builder
	res.WriteString(fmt.Sprintf("Array: size = %d , capacity = %d\n", this.size, this.GetCapacity()))
	res.WriteString("[")
	for i := 0; i < this.size; i++ {
		res.WriteString(fmt.Sprintf("%v",this.data[i]))
		if i != this.size-1 {
			res.WriteString(", ")
		}
	}
	res.WriteString("]")
	return res.String()
}

func NewArray(capacity int) *Array {
	return &Array{
		data: make([]interface{}, capacity),
		size: 0,
	}
}

func NewArrayDefault() *Array {
	return NewArray(10)
}