<?php

namespace algo\sword_means_offer\smo53;

class Solution2
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums)
    {
        if (!is_array($nums)) return -1;
        $left = 0;
        $right = count($nums) - 1;
        while ($left <= $right) {
            $mid = $left + (int)(($right - $left) / 2);
            if ($nums[$mid] !== $mid) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        return $left;
    }
}