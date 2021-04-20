package SelectionSort

type SelectionSort struct {
}

func (this *SelectionSort) sort(arr []int) {
	//循环不变量：arr[0,i)是有序的，arr[i,n) 是无序的
	for i := 0; i < len(arr); i++ {
		minIndex := i
		for j := i; j < len(arr); j++ {
			if arr[j] < arr[minIndex] {
				minIndex = j
			}
		}
		arr[i],arr[minIndex] = arr[minIndex],arr[i]
	}
}

func NewSelectionSort() *SelectionSort {
	return &SelectionSort{}
}