<?php

/**
 * Created by PhpStorm.
 * User: lio
 * Date: 2021/4/18
 * Time: 下午4:36
 */
class InsertionSort
{

    public $sortArr = [2, 4, 7, 1, 8, 3, 9, 2, 5, 7, 1, 8, 6];

    public function sort()
    {
        $length = count($this->sortArr);
        /*以第一层遍历为标杆,第二层遍历重置到第一次遍历到的点,重新选择循环变量里的最小值得index*/
        for ($i = 1; $i < $length; $i++) {
            for ($j = $i; $j > 0; $j--) {
                if($this->sortArr[$j] < $this->sortArr[$j-1]){
                    $tmp = $this->sortArr[$j];
                    $this->sortArr[$j] = $this->sortArr[$j - 1];
                    $this->sortArr[$j - 1] = $tmp;
                }
            }
        }
    }
}


$insertSort = new InsertionSort();
$insertSort->sort();
echo json_encode($insertSort->sortArr);