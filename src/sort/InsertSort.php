<?php

namespace algo\sort;


class InsertSort
{
    private function __construct()
    {
    }

    public static function sortByRange($arr, $l, $r)
    {
        for ($i = $l; $i <= $r; $i++) {
            $preIndex = $i - 1;
            $current = $arr[$i];
            while ($preIndex >= 0 && $arr[$preIndex] > $current) {
                $arr[$preIndex + 1] = $arr[$preIndex];
                $preIndex--;
            }
            $arr[$preIndex + 1] = $current;
        }
        return $arr;
    }

    public static function sort($arr)
    {
        return self::sortByRange($arr, 0, count($arr) - 1);
    }
}
