<?php

namespace algo\sword_means_offer\smo53;

class Solution {

    /**
     * @video https://www.bilibili.com/video/BV1wK4y1X71F?from=search&seid=2195740521646558729
     * @link https://leetcode-cn.com/problems/zai-pai-xu-shu-zu-zhong-cha-zhao-shu-zi-lcof/
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        if (!is_array($nums)) return 0;
        return $this->bundaryR($nums, $target) - $this->bundaryR($nums, $target - 1);
    }

    function bundaryR($nums, $target) {
        $left = 0;
        $right = count($nums) - 1;
        while($left <= $right) {
            $mid = (int)(($left + $right) / 2);
            if ($nums[$mid] <= $target) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
        return $left;
    }
}