<?php


namespace algo\recursion;


class Sum
{
    public static function getSum($arr)
    {
        return self::sum($arr, 0);
    }
    private static function sum($arr, $l)
    {
        if ($l == count($arr)) {
            return 0;
        }
        return $arr[$l] + self::sum($arr, $l + 1);
    }
}