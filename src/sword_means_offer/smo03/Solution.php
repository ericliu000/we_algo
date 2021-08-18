<?php

namespace algo\sword_means_offer\smo03;

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findRepeatNumber($nums)
    {
        if (!is_array($nums)) {
            return -1;
        }
        foreach ($nums as $value) {
            if ($value < 0 || $value >= count($nums)) {
                return -1;
            }
        }
        $i = 0;
        while ($i < count($nums)) {
            if ($i === $nums[$i]) {
                $i++;
                continue;
            }
            if ($nums[$i] === $nums[$nums[$i]]) {
                return $nums[$i];
            } else {
                $tmp = $nums[$nums[$i]];
                $nums[$nums[$i]] = $nums[$i];
                $nums[$i] = $tmp;
            }
        }
        return -1;
    }
}