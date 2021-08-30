<?php

namespace algo\sort;

class QuickSort
{
    private function __construct() {}


    /**
     * 快排
     * @param array $arr
     */
    public static function sort(&$arr) {
        self::sortByRange($arr, 0, count($arr) - 1);
    }

    private static function sortByRange(&$arr, $start, $end) {
        if ($end <= $start) return;

        $pivot = $arr[$end];
        $left = $start; $right = $end - 1;

        while($left < $right) {
            while ($left < $end && $arr[$left] < $pivot) $left++;
            while ($right >= $start && $arr[$right] > $pivot) $right--;
            if ($right >= $left) {
                self::swap($arr, $left, $right);
                $left++;
                $right--;
            }
        }
        if ($right < 0 || $left >= $end) return;
        self::swap($arr, $left, $end);
        self::sortByRange($arr, $left + 1, $end);
        self::sortByRange($arr, $start, $left - 1);
    }

    private static function swap(&$arr, $i, $j) {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
    }
}