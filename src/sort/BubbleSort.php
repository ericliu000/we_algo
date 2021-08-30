<?php

namespace algo\sort;

class BubbleSort
{
    use ArrSwapTrait;
    private function __construct() {}

    /**
     * 冒泡排序
     * @param array $arr
     */
    public static function sort(array &$arr) {
        $n = count($arr);
        for ($i=0; $i<$n; $i++) {
            for ($j=0; $j<$n-1-$i; $j++) {
                if ($arr[$j] > $arr[$j+1]) {
                    self::swap($arr, $j, $j+1);
                }
            }
        }
    }
    /**
     * 冒泡排序
     * @param array $arr
     */
    public static function sortBetter(array &$arr) {
        $n = count($arr);
        for ($i=0; $i<$n; $i++) {
            $isSorted = true;
            for ($j=0; $j<$n-1-$i; $j++) {
                if ($arr[$j] > $arr[$j+1]) {
                    $isSorted = false;
                    self::swap($arr, $j, $j+1);
                }
            }
            if ($isSorted) break;
        }
    }
}