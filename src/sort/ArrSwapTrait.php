<?php
namespace algo\sort;

trait ArrSwapTrait {
    static function swap(&$arr, $i, $j) {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
    }
}
