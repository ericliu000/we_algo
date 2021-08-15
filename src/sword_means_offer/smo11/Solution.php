<?php

namespace algo\sword_means_offer\smo11;

use algo\exception\IllegalInputException;

class Solution {

    /**
     * @param Integer[] $numbers
     * @return Integer
     */
    function minArray($numbers) {
        if (!is_array($numbers) || count($numbers) === 0) {
            throw new IllegalInputException();
        }

        $left = 0;
        $right = count($numbers) - 1;

        while ($left < $right) {
            $mid = (int)(($left + $right) / 2);
            if ($numbers[$mid] < $numbers[$right]) {
                $right = $mid;
            } elseif ($numbers[$mid] > $numbers[$right]) {
                $left = $mid + 1;
            } else {
                $right--;
            }
        }
        return $numbers[$left];
    }
}