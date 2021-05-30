<?php

namespace algo\sort;

/**
 * Class MergeSort
 * @package algo\sort
1、时间复杂度：O(nlogn)
最好情况、最坏情况和平均时间复杂度均为O(nlogn);
2、空间复杂度：O(n)
算法处理过程中，需要一个大小为 n 的临时存储空间保存合并序列，所以空间复杂度为O(n)。
3、稳定性：稳定
在归并排序中，相等的元素的顺序不会改变，所以它是稳定排序。
 * @link 参考文章 https://www.cnblogs.com/sunshineliulu/p/8573991.html
 */
class MergeSort
{
    public static function sort($arr)
    {
        self::mergeSort($arr, 0, count($arr) - 1);
        return $arr;
    }

    private static function mergeSort(&$arr, $l, $r)
    {
        if ($r > $l) {
            //找到中间索引
            $mid = floor(($l + $r) / 2);
            //对左边进行递归排序
            self::mergeSort($arr, $l, $mid);
            //对右边进行递归排序
            self::mergeSort($arr, $mid + 1, $r);
            //合并
            if ($arr[$mid] > $arr[$mid+1]) {
                self::merge($arr, $l, $mid, $r);
            }
        }
    }

    // 将两个有序数组合并成一个有序数组
    private static function merge(&$arr, $left, $mid, $right)
    {
        $i = $left;     // 左数组的下标
        $j = $mid + 1;  // 右数组的下标
        $temp = array();// 临时合并数组
        // 扫描第一段和第二段序列，直到有一个扫描结束
        while ($i <= $mid && $j <= $right) {
            // 判断第一段和第二段取出的数哪个更小，将其存入合并序列，并继续向下扫描
            if ($arr[$i] < $arr[$j]) {
                $temp[] = $arr[$i];
                $i++;
            } else {
                $temp[] = $arr[$j];
                $j++;
            }
        }
        // 比完之后，假如左数组仍有剩余，则直接全部复制到 temp 数组
        while ($i <= $mid) {
            $temp[] = $arr[$i];
            $i++;
        }
        // 比完之后，假如右数组仍有剩余，则直接全部复制到 temp 数组
        while ($j <= $right) {
            $temp[] = $arr[$j];
            $j++;
        }
        // 将合并序列复制到原始序列中
        for ($k = 0; $k < count($temp); $k++) {
            $arr[$left + $k] = $temp[$k];
        }
    }
}
