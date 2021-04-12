package LinearSearch

type Student struct {
	name string
}

func (this *Student) Equals(v interface{}) bool {
	another, ok := v.(*Student)
	if !ok {
		return false
	}
	return this.name == another.name
}

func NewStudent(name string) *Student {
	return &Student{
		name: name,
	}
}