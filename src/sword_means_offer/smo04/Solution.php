<?php

namespace algo\sword_means_offer\smo04;

class Solution {

    /**
     * @link https://leetcode-cn.com/problems/er-wei-shu-zu-zhong-de-cha-zhao-lcof/submissions/
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function findNumberIn2DArray($matrix, $target): bool
    {
        if (!is_array($matrix) || count($matrix) === 0 || count($matrix[0]) === 0) {
            return false;
        }
        $i = 0;
        $j = count($matrix[0]) -1;//下标是从len-1开始的

        //循环出口：任意一个扫描指针到界外时
        while($i < count($matrix) && $j >= 0) {
            if ($target === $matrix[$i][$j]) {
                return true;
            } elseif ($target > $matrix[$i][$j]) {
                $i++;
            } else {
                $j--;
            }
        }
        return false;
    }
}