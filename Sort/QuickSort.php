<?php

/**
 * 快速排序
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
                $tmp = $this->arr[$min];
                $this->arr[$min] = $this->arr[$max];
                $this->arr[$max] = $tmp;

                $min++;
                $max--;
            }
        }

        // 最后交换标记值
        $tmp = $this->arr[$index];
        $this->arr[$index] = $this->arr[$min];
        $this->arr[$min] = $tmp;

        echo json_encode([$left, $right, $min, $this->arr]) . PHP_EOL;
        sleep(1);

        return $min;
    }


    /**
     * 递进交换
     *
     * @param $left
     * @param $right
     */
    public function partition3($left, $right)
    {
        for ($i = $left + 1; $i < $right; $i++) {

        }
    }
}


$quickSort = new QuickSort();
echo json_encode($quickSort->run());
