<?php


namespace algo\src;


class StringHelper
{
    private function __construct()
    {
    }

    public static function isSort(array $arr): bool
    {
        for ($i=1;$i<count($arr);$i++) {
            if ($arr[$i-1] > $arr[$i]) {
                return false;
            }
        }
        return true;
    }
}

$arr = [2,3,4,5,6];
var_dump(StringHelper::isSort($arr));

$arr = [2,3,4,5,7,6];
var_dump(StringHelper::isSort($arr));