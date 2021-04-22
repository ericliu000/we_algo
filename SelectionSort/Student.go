package SelectionSort

import "fmt"

type Student struct {
	name string
	score int
}

func (this *Student) CompareTo(v interface{}) int {
	another, ok := v.(*Student)
	if !ok {
		panic("compare to is not student")
	}
	return this.score - another.score
}

func (this *Student) String() string {
	return fmt.Sprintf("Student(name %s,score %d)", this.name, this.score)
}

func NewStudent(name string, score int) *Student {
	return &Student{
		name: name,
		score: score,
	}
}
