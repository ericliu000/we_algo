package InsertionSort

type insertionSort struct {
}

func (this *insertionSort) Sort(arr []int) {
	for i := 0; i < len(arr); i++ {
		//for j := i; j > 0 ; j-- {
		//	if arr[j] >= arr[j-1] {
		//		break
		//	}
		//	arr[j],arr[j-1] = arr[j-1],arr[j]
		//}

		//简写优化
		for j := i; j > 0 && arr[j] < arr[j-1]; j-- {
			arr[j],arr[j-1] = arr[j-1],arr[j]
		}
	}
}

//常数级别优化，不再交换，找到位置后插入，其他的平移过去，一次交换
func (this *insertionSort) SortV2(arr []int) {
	for i := 0; i < len(arr); i++ {
		target := arr[i]
		var j = i
		for ; j >0 && target < arr[j-1]; j-- {
			arr[j] = arr[j-1]
		}
		arr[j] = target
	}
}

func NewInsertionSort() *insertionSort {
	return &insertionSort{}
}