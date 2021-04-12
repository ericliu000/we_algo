package LinearSearch

type LinearSearch struct {
}

func NewLinearSearch() *LinearSearch {
	return &LinearSearch{}
}

func (this *LinearSearch) Search(data []int, target int) int {
	for i := 0; i < len(data); i++ {
		if data[i] == target {
			return i
		}
	}
	return -1
}

func (this *LinearSearch) SearchWithEqual(data []Comparable, target Comparable) int {
	for i := 0; i < len(data); i++ {
		if data[i].Equals(target) {
			return i
		}
	}
	return -1
}