<?php


namespace algo\sort;


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