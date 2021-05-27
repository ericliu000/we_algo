<?php

/**
 * 快速排序 比归并排序要快一点
 *
 * 利用分治和交换思想
 *
 * 和归并排序不同点是 归并排序中间数除以二即可, 快排是通过中间值来排序
 *
 * 拓展题: 剑指 Offer 21 调整数组顺序使奇数位于偶数前面
 * Created by PhpStorm.
 * User: lio
 * Date: 2021/5/24
 * Time: 下午8:26
 */
class QuickSort
{
    public $arr = [3, 2, 7, 6, 1, 8, 6, 9];

    public function run()
    {
        $this->sort(0, count($this->arr) - 1);
    }


    /**
     * 把问题换成更小的问题
     *
     * @param $left
     * @param $right
     */
    public function sort($left, $right)
    {
        if ($left >= $right) return;

        $middleIndex = $this->partition($left, $right);

        $this->sort($left, $middleIndex);
        $this->sort($middleIndex + 1, $right);
    }

    /**
     * 找出该值所在的中间索引
     *
     * @param $left
     * @param $right
     *
     * @return int
     */
    public function partition($left, $right)
    {
        // 方法一: 辅助数组,需要额外空间 比较简单不举实例

        // 方法二: 交换 也有两种 两头指针交换, 再一种是递进交换
        return $this->partition2($left, $right);

        // 第二种交换,递进交换就是课程里讲的
        //return $this->partition3($left,$right);
    }


    /**
     * 双指针 两头指针交换
     *
     * @param $left
     * @param $right
     * @return mixed
     */
    public function partition2($left, $right)
    {
        // 方法二: 交换 也有两种 两头指针交换, 再一种是递进交换
        $index = $left;
        $min = $left + 1;
        $max = $right;

        while ($min < $max) {
            if ($this->arr[$min] <= $this->arr[$index]) {
                $min++;
            } elseif ($this->arr[$max] > $this->arr[$index]) {
                $max--;
            } else {
                $this->swap($min,$max);

                $min++;
                $max--;
            }
        }

        // 最后交换标记值
        // 这里是要交换的位置
        $swapIndex = $min - 1;
        $this->swap($swapIndex,$index);

        echo json_encode([$left, $right, $min, $this->arr]) . PHP_EOL;
        sleep(1);

        return $swapIndex;
    }


    /**
     * 双指针 递进交换
     *
     * @param $left
     * @param $right
     */
    public function partition3($left, $right)
    {
        $index = $left;
        $i = $left;
        for ($j = $left + 1; $j < $right; $j++) {
            if($this->arr[$j] < $this->arr[$index]){
                $i++;
                $this->swap($i,$j);
            }

            echo json_encode([$left, $right, $i, $this->arr]) . PHP_EOL;
            sleep(1);
        }

        // 最后交换标兵
        $this->swap($i,$index);
        return $i;
    }


    /**
     * 交换数组两个值
     *
     * @param $i
     * @param $j
     */
    public function swap($i,$j){
        $tmp = $this->arr[$i];
        $this->arr[$i] = $this->arr[$j];
        $this->arr[$j] = $tmp;
    }
}


$quickSort = new QuickSort();
echo json_encode($quickSort->run());

//echo json_encode($quickSort->arr) . PHP_EOL;
//$quickSort->partition2(0, count($quickSort->arr) - 1);
//echo json_encode($quickSort->arr) . PHP_EOL;