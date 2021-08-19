<?php

namespace algo\sword_means_offer\smo42;

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        if (!is_array($nums) || count($nums) === 0) {
            return PHP_INT_MIN;
        }
        // 状态定义： dp[i] 以i结尾的子数组的最大值
        // 状态方程：dp[i] = max($nums[$i], nums[i]+dp[i-1])
        // 初始值：dp[0] = nums[0]
        // 终止条件 i->[0,nums.len)
        $dp[0] = $nums[0];
        $max = $dp[0];
        for($i=1;$i<count($nums);$i++) {
            $dp[$i] = max($nums[$i], $nums[$i]+$dp[$i-1]);
            $max = max($max, $dp[$i]);
        }
        return $max;
    }
}