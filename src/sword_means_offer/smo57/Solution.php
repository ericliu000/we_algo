<?php

namespace algo\sword_means_offer\smo57;


class Solution
{

    /**
     * @link https://leetcode-cn.com/problems/he-wei-sde-liang-ge-shu-zi-lcof/
     * 剑指 Offer 57. 和为s的两个数字
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        if (!is_array($nums) || count($nums) === 0) {
            return [];
        }
        $left = 0;
        $right = count($nums) - 1;
        while ($left < $right) {
            if ($nums[$left] + $nums[$right] > $target) {
                $right--;
            } elseif ($nums[$left] + $nums[$right] < $target) {
                $left++;
            } else {
                return [$nums[$left], $nums[$right]];
            }
        }
        return [];
    }
}