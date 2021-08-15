<?php

namespace algo\sword_means_offer\smo21;

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function exchange($nums) {
        if (!is_array($nums) || count($nums)<=1) {
            return $nums;
        }
        $left = 0; $right = count($nums) - 1;
        while ($left < $right) {
            while ($left < count($nums) && $this->isOdd($nums[$left])) {
                $left++;
            }
            while ($right >= 0 && !$this->isOdd($nums[$right])) {
                $right--;
            }
            if ($left < $right) {
                $tmp = $nums[$left];
                $nums[$left] = $nums[$right];
                $nums[$right] = $tmp;
                $left++;
                $right--;
            }
        }
        return $nums;
    }

    /** 是否是奇数 */
    private function isOdd($num) {
        return $num % 2 === 1;
    }
}