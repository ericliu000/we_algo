<?php

namespace algo;

class ArrayHelper
{
    public static function makeArray(int $len)
    {
        $arr = [];
        for ($i = 0; $i < $len; $i++) {
            $arr[$i] = null;
        }
        return $arr;
    }

}