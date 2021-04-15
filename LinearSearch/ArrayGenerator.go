package LinearSearch

type ArrayGenerator struct {

}

func (this *ArrayGenerator) GenerateOrderedArray(n int) []int {
	if n < 0 {
		return nil
	}
	arr := make([]int, n)
	for i := 0; i < n; i++ {
		arr[i] = i
	}
	return arr
}

func NewArrayGenerator() *ArrayGenerator {
	return &ArrayGenerator{}
}