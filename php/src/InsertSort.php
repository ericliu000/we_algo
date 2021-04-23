<?php


namespace algo\src;


class InsertSort
{
    private function __construct()
    {
    }

    public static function sort($arr)
    {
        $len = count($arr);
        for ($i = 1; $i < $len; $i++) {
            $preIndex = $i - 1;
            $current = $arr[$i];
            while($preIndex >= 0 && $arr[$preIndex] > $current) {
                $arr[$preIndex+1] = $arr[$preIndex];
                $preIndex--;
            }
            $arr[$preIndex+1] = $current;
        }
        return $arr;
    }


}

$arr = [6, 4, 2, 3, 1, 5];
$aaa = InsertSort::sort($arr);
var_dump($aaa);
