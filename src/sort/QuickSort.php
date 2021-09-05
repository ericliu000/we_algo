<?php

namespace algo\sort;

class QuickSort
{
    /**
     * 快排
     * @param array $arr
     */
    public static function sort($arr)
    {
        self::QSort($arr, 0, count($arr) - 1);
        return $arr;
    }

    private static function QSort(array &$arr, $low, $high)
    {
        //当 $low >= $high 时表示不能再进行分组，已经能够得出正确结果了
        if ($low < $high) {
            $i = self::partition($arr, $low, $high);  //将$arr[$low...$high]一分为二，算出枢轴值
            self::QSort($arr, $low, $i - 1);    //对低子表（$pivot左边的记录）进行递归排序
            self::QSort($arr, $i + 1, $high);    //对高子表（$pivot右边的记录）进行递归排序
        }
    }

    private static function partition(&$arr, $low, $high)
    {
        $pivot = $arr[$low];//选取左边的为枢纽
        while ($low < $high) {
            // 先从右边开始扫描
            while ($low < $high && $arr[$high] >= $pivot) $high--;
            self::swap($arr, $low, $high);
            while ($low < $high && $arr[$low] <= $pivot) $low++;
            self::swap($arr, $low, $high);
        }
        return $low;
    }

    private static function swap(&$arr, $i, $j)
    {
        if ($i !== $j) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $tmp;
        }
    }

    /**
     * 快排2 - Simple Solution
     * @link https://shockerli.net/post/quick-sort-implement-by-php/
     * 这种解法数组较大时会遇到超时的情况
     * @param array $arr
     */
    public static function sortSS($arr)
    {
        $len = count($arr);
        if ($len <= 1) return $arr;
        $pivot = $arr[0];
        $low = $high = [];
        for ($i = 1; $i < $len; $i++) {
            if ($arr[$i] < $pivot) {
                $low[] = $arr[$i];
            } else {
                $high[] = $arr[$i];
            }
        }
        $low = self::sortSS($low);
        $high = self::sortSS($high);
        return array_merge($low, [$pivot], $high);
    }
}