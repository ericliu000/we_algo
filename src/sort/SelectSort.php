<?php

namespace algo\sort;

/**
 * 选择排序
 */
class SelectSort
{
    public static function sort($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            $iMin = self::findIndexOfMinNum($arr, $i);
            $arr = self::swap($arr, $iMin, $i);
        }
        return $arr;
    }

    static function findIndexOfMinNum($arr, $start)
    {
        if ($start >= count($arr)) {
            throw new Exception('下标超出范围');
        }
        $iMin = $start;
        for ($i = $start; $i < count($arr); $i++) {
            if ($arr[$i] < $arr[$iMin]) {
                $iMin = $i;
            }
        }
        return $iMin;
    }

    static function findIndexOfMinNum2($arr, $end)
    {
        $iMax = 0;
        for ($i = 0; $i <= $end; $i++) {
            if ($arr[$i] > $arr[$iMax]) {
                $iMax = $i;
            }
        }
        return $iMax;
    }

    static function swap($arr, $x, $y)
    {
        if ($x == $y) {
            return $arr;
        }
        $tmp = $arr[$x];
        $arr[$x] = $arr[$y];
        $arr[$y] = $tmp;
        return $arr;
    }
}
