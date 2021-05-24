<?php

/**
 * Created by PhpStorm.
 * User: lio
 * Date: 2021/4/17
 * Time: 下午1:01
 */
class SelectSort
{

    public $sortArr = [2, 4, 7, 1, 8, 3, 9, 2, 5, 7, 1, 8, 6];

    /**
     * 循环不变量是已经拍好的数
     */
    public function sort()
    {
        $length = count($this->sortArr);
        /*以第一层遍历为标杆,第二层遍历重置到第一次遍历到的点,重新选择循环变量里的最小值得index*/
        for ($i = 0; $i < $length; $i++) {
            $minIndex = $i;
            /*遍历的是未排好的数据*/
            for ($j = $i; $j < $length; $j++) {
                if($this->sortArr[$j] < $this->sortArr[$minIndex]){
                    $minIndex = $j;
                }
            }

            /*交换第一层遍历节点*/
            $tmp = $this->sortArr[$i];
            $this->sortArr[$i] = $this->sortArr[$minIndex];
            $this->sortArr[$minIndex] = $tmp;
        }
    }
}


$selectSort = new SelectSort();
$selectSort->sort();
echo json_encode($selectSort->sortArr);