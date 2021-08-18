<?php

namespace algo\sword_means_offer\smo61;

class Solution {

    /**
     * @link https://leetcode-cn.com/problems/bu-ke-pai-zhong-de-shun-zi-lcof/
     * @video https://www.bilibili.com/video/BV1h7411776x?from=search&seid=9011731554411117258
     * @param Integer[] $nums
     * @return Boolean
     */
    function isStraight($nums) {
        if (!is_array($nums) || count($nums) !== 5) return false;
        sort($nums);
        $sum = 0;
        while($nums[$sum] === 0) {
            $sum++;
        }
        for($j = $sum+1; $j < count($nums); $j++){
            if ($nums[$j] < 0 || $nums[$j] > 13) return false;
            $sum -= $nums[$j] - $nums[$j-1] - 1;
            if ($sum < 0 || $nums[$j] === $nums[$j-1]) {
                return false;
            }
        }
        return true;
    }
}